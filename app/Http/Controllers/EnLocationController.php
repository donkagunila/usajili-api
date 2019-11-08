<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\En_location;

class EnLocationController extends Controller
{
    public function index(Request $request)
    {

    	$location = En_location::create([
    		'user_id' => Auth::id(),
    		'ward' => request('ward'),
    		'district' => request('district'),
    		'city' => request('city'),
    		'country' => request('country'),
    	]);

    	return response()->json(['success' => 'Data saved successfully.'], 200); 	
    }

     public function check(Request $request)
    {
        $user_id = Auth::id();
        $data = En_location::where([
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
