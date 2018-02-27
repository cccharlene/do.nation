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

Route::get('/', function () {
    return view('welcome');
});

//Char
Route::post('items','ItemsController@getItems');
Route::post('merch','ItemsController@getMerchItems');
Route::post('signUp','SignUp@signUp');
Route::post('login','SignUp@login');

//Test
Route::get('viewTest','SignUp@testView');
Route::post('test', 'SignUp@checkRole');
Route::post('upload', 'SignUp@upload');