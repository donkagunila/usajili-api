<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function() {
	Route::post('/help', 'HelpController@store');
	Route::post('/feedback', 'FeedbackController@store');
});

// Auth Routes.
Route::group([
	'prefix' => 'auth'
], function () {
	Route::get('/signup/activate/{token}', 'AuthController@confirmAccount');
	Route::post('/register', 'AuthController@register');
	Route::post('/login', 'AuthController@login');
	Route::post('/logout', 'AuthController@logout');
	Route::post('/forgot', 'PasswordResetController@forgot');
});


Route::fallback(function(){
    return response()->json([
        'error' => 'Page Not Found.'], 404);
});