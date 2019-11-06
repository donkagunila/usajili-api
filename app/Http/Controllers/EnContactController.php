<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\En_Contact;

class EnContactController extends Controller
{
    public function index(Request $request)
    {
    	$contacts = En_Contact::create([
    		'phone_number' => request('phone_number'),
    		'email_address' => request('email_address'),
    		'work_email_address' => request('work_email_address'),
    		'user_id' => Auth::id(),
    		'opening_id' => request('opening_id'),
    	]);
    	
    	return response()->json([
            'success' => 'Data saved successfully.'], 200);  
    	}
    }
}
