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

//Article
Route::get('/article','WindController@index');
Route::get('/article/{id}','WindController@show');//加个限制
Route::get('/articles/{category}','WindController@category');
Route::get('/api/v2/article','FunctionController@getArticle');

//Comment
Route::post('/comment','WindController@comment');
Route::get('/api/v2/comment/{id}','WindController@getComment');

//User


//Note
Route::get('/note','WindController@note');

//Manage
Route::get('/manage/article/create', 'WindController@create');
Route::post('/articles','WindController@store');
Route::resource('/manage/article', 'WindController');
Route::get('/manage/articles','WindController@manageArticle');
//Route::get('/manage/comment','WindController@index');
//Route::get('/manage/user','WindController@index');



//Auth
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

//Search
Route::get('/search', 'WindController@search');

//Static
Route::get('/links', 'WindController@links');
Route::get('/about', 'WindController@about');

//Status
Route::get('/api/v2/status','StatusController@status');