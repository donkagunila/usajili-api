<?php

namespace App\Http\Controllers;

use App\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // /validate  data
        $validator = Validator::make($request->all(), [
            'content' => ['required']
        ]);

        // respond if data is invalid
         if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }


        // get Authenticated use
        $user = Auth::User();

        try {
            // Create the Help instance
            $help = Help::create([
                'content' => request('content'),
                'user_id' => $user->id,
            ]);

             return response()->json([
                    'success' => 'Help Rceived.'], 200);  

        } catch (Exception $ex) {
            abort(500, 'There was an error, try again');   
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        //
    }
}
