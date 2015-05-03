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

Route::get('help', 'ClientController@help');
Route::get('order', 'ClientController@order');
Route::get('packages', 'ClientController@packages');
Route::get('process', 'ClientController@process');
