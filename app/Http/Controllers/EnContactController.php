<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\En_contact;
use Auth;

class EnContactController extends Controller
{
    public function index(Request $request)
    {
    	$contacts = En_contact::create([
    		'phone_number' => request('phone_number'),
    		'email_address' => request('email_address'),
    		'work_email_address' => request('work_email_address'),
    		'user_id' => Auth::id(),
    		'opening_id' => request('opening_id'),
    	]);
    	
    	return response()->json(['success' => 'Data saved successfully.'], 200);  
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

