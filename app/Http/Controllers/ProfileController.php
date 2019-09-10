<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource as UserResource;

use Illuminate\Support\Facades\Validator;

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

            return $this->returnJson('First name', request('first_name'));

    	} elseif ($request->input('last_name')) {
    		$profile->update([
	    		'last_name' => request('last_name'),
	    	]);
	    	$profile->save();

            return $this->returnJson('Last name', request('last_name'));

    	} elseif ($request->input('date_of_birth')) {
    		$profile->update([
	    		'date_of_birth' => request('date_of_birth'),
	    	]);
	    	$profile->save();

            return $this->returnJson('Date of Birth', request('date_of_birth'));

    	} elseif ($request->input('mobile_number')) {
    		$profile->update([
	    		'mobile_number' => request('mobile_number'),
	    	]);
	    	$profile->save();

          return $this->returnJson('Mobile Number', request('mobile_number'));


    	} elseif ($request->input('gender')) {
    		$status->update([
	    		'gender' => request('gender'),
	    	]);
	    	$status->save();

            return $this->returnJson('Gender', request('gender'));


    	} elseif ($request->input('marital_status')) {
    		$status->update([
		    	'marital_status' => request('marital_status'),
	    	]);
	    	$status->save();

              return $this->returnJson('Marital Status', request('marital_status'));

    	} elseif ($request->input('nationality')) {
            $status->update([
                'nationality' => request('nationality'),
            ]);
            $status->save();

              return $this->returnJson('Nationaity', request('nationality'));

        } elseif ($request->input('city')) {
			$location->update([
	    		'city' => request('city'),
                'district' => '',
                'ward' => '',
	    	]);
	    	$location->save();

            return $this->returnJson('City', request('city'));


    	} elseif ($request->input('district')) {
			$location->update([
	    		'district' => request('district'),
                'ward' => '',
	    	]);
	    	$location->save();

            return $this->returnJson('District', request('district'));

    	} elseif ($request->input('ward')) {
			$location->update([
	    		'ward' => request('ward'),
	    	]);
	    	$location->save();

              return $this->returnJson('Ward', request('ward'));
    	}

    }


    public function create(Request $request)
    {
        $user = User::find(Auth::id());
        $profile = $user->profile;

        $profile->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'date_of_birth' => request('date_of_birth'),
            'mobile_number' => request('mobile_number'),
        ]);
        $profile->save();

        return [
            "status" => "success",
            "message" => "Profile Updated successfully",
            "Profile" => $profile            
        ];

    }


    public function returnJson($item, $value)
    {
        return [
            "status" => "success",
            "message" => $item." Updated successfully",
            $item => $value            
        ];
    }

    public function returnErrorJson()
    {
        return [
            "status" => "Error",
            "message" => "Field was not updated",           
        ];
    }


    public function status()
    {

        $status = 25;

        $user = User::find(Auth::id());

        if ($user->profile->first_name) {
            $status = $status + 25;
        } 

        if ($user->status->gender) {
            $status = $status + 25;
        }

        if ($user->location->city) {
            $status = $status + 25;
        }

       
        return [
            "status" => $status,        
        ];
    }
}
