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

    	 // // validate user data
      //   $validator = Validator::make($request->all(), [
      //       'desc' => ['required'],
      //       'cost' => ['request'],
      //       'poster' => ['required'],
      //   ]);

      //   if($validator->fails()){
      //       return response()->json($validator->messages(), 200);
      //   }

        // $table->bigIncrements('id');
        //     $table->integer('vendor_id');
        //     $table->string('category_id');
        //     $table->longtext('desc');
        //     $table->integer('cost');
        //     $table->timestamp('start')->useCurrent();
        //     $table->timestamp('end')->useCurrent();
        //     $table->string('poster');
        //     $table->timestamps();


    	Opening::Create([
            'vendor_id' => Auth::id(),
            'category_id' => 1,
            'desc' => request('desc'),
            'cost' => request('cost'),
            'start' => request('start'),
            'end' => request('end'),
            'poster' => request('poster'),
        ]);

    	return response()->json(['message' => 'Created successfully']);
    }
}
