<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource as UserResource;

use App\Profile;
use App\Location;
use app\Status;
use App\User;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
    	return Profile::all();
    }

    public function update(Request $request)
    {	

    	$user = User::find(Auth::id());
    	$profile = $user->profile;
    	$status = $user->status;
    	$location = $user->location;

    	$profile->update([
    		'first_name' => request('first_name'),
    		'last_name' => request('last_name'),
    		'date_of_birth' => request('date_of_birth'),
    		'mobile_number' => request('mobile_number')
    	]);
    	$profile->save();

    	$status->update([
    		'gender' => request('gender'),
	    	'marital_status' => request('marital_status'),
    	]);
    	$status->save();

    	$location->update([
    		'city' => request('city'),
    		'district' => request('district'),
    		'ward' => request('ward'),
    	]);
    	$location->save();

    	return new UserResource(Auth::user());
    }
}
