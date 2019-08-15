<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events\Registration;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // validate user data
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'alpha', 'unique:users'],
            'email'    => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        // create user
        $user = User::create([
             'username' => $request->username,
             'email'    => $request->email,
             'password' => $request->password,
         ]);


        $token = auth()->login($user);

        // Send Email to user.
        // Mail::to($user->email)->queue(new WelcomeEmail($user));
        event(new Registration($user));

        return $this->respondWithToken($token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
        ]);
    }
}