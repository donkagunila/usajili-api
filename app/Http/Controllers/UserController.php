<?php

namespace App\Http\Controllers;
use App\Events\Disabled;

use Auth;
use App\User;
use App\Http\Resources\UserResource as UserResource;


use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();

        return new UserResource($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function deleteAccount()
    {
         $user = Auth::User();

         event(new Disabled($user));

         // Event to delete user
        return [
            "status" => "Success",
            "message" => "Account has been deleted successfully"
        ];
    }


    //   public function activateAccount(Request $request)
    // {
    //      $user = User::where('email', request->('email'))->first();

    //      $user->active = true;
    //      $user->activation_token = '';
    //     $user->save();




    //      // Event to delete user
    //     return [
    //         "status" => "Success",
    //         "message" => "Account has been activated successfully"
    //     ];
    // }




    public function all()
    {
        $users = User::all();
        return UserResource::collection($users);
    }
}
