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
	Route::get('/about', 'VersionController@index');
	Route::get('/profile', 'UserController@index');
	Route::post('/profile/update', 'ProfileController@update');

	// create personal details
	Route::post('/profile/create', 'ProfileController@create');

	// create status details.
	Route::post('/status/create', 'StatusController@create');

	// create location details
	Route::post('/location/create', 'LocationController@create');


	Route::get('/profile/status', 'ProfileController@status');


	// random home posts
	Route::get('/home', 'OpeningController@random');
	
	Route::post('/category/create', 'CategoryController@store');

	// list all categories
	Route::get('/categories/list', 'CategoryController@index');

	// create openings
	Route::post('/opening/create', 'OpeningController@store');
});

	
Route::post('/checkusername', 'CheckController@checkuser');
Route::post('/checkemail', 'CheckController@checkemail');

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