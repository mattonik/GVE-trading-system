<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('users', 'UserController@listUsers');

Route::get('user/new', 'UserController@addUserForm');
Route::post('user/new', 'UserController@addUser');

Route::get('user/remove/{id}', 'UserController@deleteUser');
Route::get('user/edit/{id}', 'UserController@showProfile');

Route::get('user/{id}', 'UserController@showProfile');

Route::get('messages', 'MessagesController@showMessages');
Route::get('message/new', 'MessagesController@newMessage');
Route::post('message/send', 'MessagesController@sendMessage');

Route::get('logout', function () {
	Auth::logout();
	return redirect('home');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
