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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index','viewcontroller@index');

Route::get('message','viewcontroller@message');


Route::get('/dashboard',[
	'user' => 'ChatController@getDashboard',
	'as' => 'dashboard',
	'middleware' => 'auth'
]);

Route::get('/createpost',[
	'user' => 'ChatController@postCreatePost',
	'as' => 'post.create',
	'middleware' => 'auth'
]);

