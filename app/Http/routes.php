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

Route::get('api/todo', ['uses' => 'TodoController@index']);
Route::post('api/todo', ['uses' => 'TodoController@store']);
Route::get('kitchensink', ['uses' => 'KitchenSink@index']);
