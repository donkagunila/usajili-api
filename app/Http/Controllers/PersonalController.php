<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use Auth;

class PersonalController extends Controller
{
    public function personal(Request $request)
    {

		$imageName = request()->image->getClientOriginalName();
        request()->image->move('uploads/passports/', $imageName);

        // return $imageName;


    	$personal = Personal::create([
    		'user_id' => Auth::id(),
    		'opening_id' => request('opening_id'),
    		'first_name' => request('first_name'),
    		'last_name' => request('last_name'),
    		'gender' => request('gender'),
    		'religion' => request('religion'),
    		'tribe' => request('tribe'),
    		'nationality' => request('nationality'),
    		'passport' => $imageName,
    	]);

    	return response()->json([
                    'success' => 'Data saved successfully.'], 200);  
    }

    public function check(Request $request)
    {
        $user_id = Auth::id();
        $data = Personal::where([
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
