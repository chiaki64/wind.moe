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

Route::get('/', 'ArticlesController@index');

Route::get('/essay', 'WindController@essay');
Route::get('/code', 'WindController@code');
Route::get('/diary', 'WindController@diary');
Route::get('/links', 'WindController@links');
Route::get('/articles', 'ArticlesController@index');
Route::get('/api/articles', 'ArticlesController@index_api');

//article create(顺序重要)
Route::get('articles/create', 'ArticlesController@create');

//article pages
Route::get('/articles/{id}', 'ArticlesController@show');

//post article
Route::post('articles', 'ArticlesController@store');


