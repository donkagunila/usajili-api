<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Opening;
use Illuminate\Support\Facades\Validator;

class OpeningController extends Controller
{
    public function random()
    {
    	return [];
    }

    public function store(Request $request)
    {

    	 // validate user data
        $validator = Validator::make($request->all(), [
            'desc' => ['required'],
            'cost' => ['request'],
            'poster' => ['required'],
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }


    	Opening::Create($request->all());

    	return response()->json(['message' => 'Created successfully']);
    }
}
