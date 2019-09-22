<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Opening;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\OpeningResource as OpeningResource;

class OpeningController extends Controller
{
    public function random()
    {
    	$openings = Opening::get();
        return OpeningResource::collection($openings);
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
            'category_id' => request('id'),
            'title' => request('title'),
            'desc' => request('desc'),
            'cost' => request('cost'),
            'start' => request('start'),
            'end' => request('end'),
            'poster' => request('poster'),
            'certificate' => request('certificate'),
            'vacancy' => request('vacancy'),
            'terms'   => request('terms'),
            'fee'   => request('fee'),
            'promotion'   => request('promotion'),
        ]);

    	return response()->json(['message' => 'Created successfully']);
    }



    public function update(Request $request)
    {
        $opening = Opening::find(request('id'));

        $opening->update([
          'title' => request('title'),
          'desc' => request('desc'),
          'cost' => request('cost'),
          'start' => request('start'),
          'end' => request('end'),
          'poster' => request('poster'),
          'certificate' => request('certificate'),
          'vacancy' => request('vacancy'),
          'terms'   => request('terms'),
          'promotion'   => request('promotion'),
        ]);   
    }
}
