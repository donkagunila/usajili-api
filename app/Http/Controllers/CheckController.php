<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class CheckController extends Controller
{
    public function checkuser(Request $request)
    {

    	 // validate user data
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'unique:users'],
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

    	return response()->json(['success' => 'ok'], 200);
    }



    public function checkemail(Request $request)
    {
    	 // validate user data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'unique:users'],
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

    	return response()->json(['success' => 'ok'], 200);

    }
}
