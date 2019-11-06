<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnParentController extends Controller
{
    public function index(Request $request)
    {
    	return response()->json([
            'success' => 'Data saved successfully.'], 200);  
    	}
    }
}
