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



    	if ($request->input('first_name')) {
    		$profile->update([
	    		'first_name' => request('first_name'),
	    	]);
	    	$profile->save();
    	} elseif ($request->input('last_name')) {
    		$profile->update([
	    		'last_name' => request('last_name'),
	    	]);
	    	$profile->save();
    	} elseif ($request->input('date_of_birth')) {
    		$profile->update([
	    		'date_of_birth' => request('date_of_birth'),
	    	]);
	    	$profile->save();
    	} elseif ($request->input('mobile_number')) {
    		$profile->update([
	    		'mobile_number' => request('mobile_number'),
	    	]);
	    	$profile->save();
    	} elseif ($request->input('gender')) {
    		$status->update([
	    		'gender' => request('gender'),
	    	]);
	    	$status->save();
    	} elseif ($request->input('marital_status')) {
    		$status->update([
		    	'marital_status' => request('marital_status'),
	    	]);
	    	$status->save();
    	} elseif ($request->input('city')) {
			$location->update([
	    		'city' => request('city'),
	    	]);
	    	$location->save();
    	} elseif ($request->input('district')) {
			$location->update([
	    		'district' => request('district'),
	    	]);
	    	$location->save();
    	} elseif ($request->input('ward')) {
			$location->update([
	    		'ward' => request('ward'),
	    	]);
	    	$location->save();
    	}

    	return new UserResource(Auth::user());
    }
}
