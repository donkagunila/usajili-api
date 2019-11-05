<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function personal(Request $request)
    {
    	return $request->all();
    }
}
