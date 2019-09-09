<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\User;
use Auth;

class StatusController extends Controller
{
    public function create(Request $request)
    {
    	$user = User::find(Auth::id());
    	$status = $user->status;


    	$status->update([
	    	'gender' => request('gender'),
	    	'marital_status' => request('marital_status'),
	    	'nationality' => request('nationality'),
	    ]);
	    $status->save();

	    return [
            "status" => "success",
            "message" => "Status Updated successfully",
            "status" => $status            
        ];
    }
}
