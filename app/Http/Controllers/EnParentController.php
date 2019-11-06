<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnParentController extends Controller
{
    public function index(Request $request)
    {

    	$parent = En_parent::create([
    		'full_name' => request('full_name'),
    		'relationship' => request('relationship'),
    		'email_address' => request('email_address'),
    		'occupation' => request('occupation'),
    		'postal_address' => request('postal_address'),
    		'home_address' => request('home_address'),
    		'user_id' => Auth::id(),
    		'opening_id' => request('opening_id'),
    	]);

    	return response()->json([
            'success' => 'Data saved successfully.'], 200);  
    	}
    }


    public function check(Request $request)
    {
        $user_id = Auth::id();
        $data = En_contact::where([
                    ['user_id' ,'=', $user_id],
                    ['opening_id' ,'=', request('opening_id')],
                ])->first();

        if($data){
            return $data;
        } else {
            return response()->json([
                'message' => 'Page empty allow user to fill.'], 200);  
        };
    }
}
