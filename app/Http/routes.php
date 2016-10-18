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

Route::get('/', 'PropertyController@index');
Route::group(['prefix' => 'property'], function () {
    Route::get('/', 'PropertyController@all');
    Route::get('/{action}/{key1}/{key2?}', 'PropertyController@search');
});
