<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@index')->name('index');

// Route::get('preview-emails', function () {
// 	$user = App\User::first();
//     $message = (new \App\Notifications\SignupActivate($user))->toMail('test@test.com');
//     return $message->render();
// });


// Auth::routes();
// Route::group(['middleware' => ['web']], function () {
// 	Route::get('/dashboard', 'HomeController@index')->name('home');
// });

// Route::middleware('auth:web')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/dashboard', 'HomeController@')
