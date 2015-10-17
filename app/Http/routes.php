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
    return view('article');
});

Route::get('/essay', 'WindController@essay');
Route::get('/code', 'WindController@code');
Route::get('/diary', 'WindController@diary');
Route::get('/links', 'WindController@links');
