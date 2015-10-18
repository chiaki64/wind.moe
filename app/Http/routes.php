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

Route::get('/', 'WindController@index');

Route::get('/essay', 'WindController@essay');
Route::get('/code', 'WindController@code');
Route::get('/daily', 'WindController@daily');
Route::get('/links', 'WindController@links');

//post article
Route::post('/articles', 'WindController@store');


Route::get('/articles', 'WindController@index');
Route::get('/api/articles', 'WindController@index_api');

//article create(顺序重要)
Route::get('articles/create', 'WindController@create');
Route::get('articles/essay', 'WindController@essay');
Route::get('articles/code', 'WindController@code');
Route::get('articles/daily', 'WindController@daily');

//article pages
Route::get('/articles/{id}', 'WindController@show');




