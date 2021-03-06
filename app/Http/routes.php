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

Route::get('/thanks', ['as' => 'thanks', 'uses' => 'UsersController@getThanks']);


Route::get('/jointhecommunity', ['as' => 'get-user', 'uses' => 'UsersController@getUser']);
Route::post('/jointhecommunity', ['as' => 'post-user', 'uses' => 'UsersController@postUser']);