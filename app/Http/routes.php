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
Route::get('/articles', 'WindController@index');

//post article
Route::post('/articles', 'WindController@store');

//=========================================================================================
// api_article
Route::get('/api/articles', 'WindController@api_index');
Route::get('/api/articles/max', 'WindController@api_max_article_id');
Route::get('/api/articles/{id}', 'WindController@api_get_article');

// api_more
Route::get('/api/more/{id}', 'WindController@api_get_more_article');

// api_category
Route::get('/api/category/{category}/{id}', 'WindController@api_get_more_category_article');

//=========================================================================================




//article
Route::get('/essay', 'WindController@essay');
Route::get('/code', 'WindController@code');
Route::get('/daily', 'WindController@daily');
Route::get('/links', 'WindController@links');
Route::get('/home', 'WindController@home');
Route::get('articles/create', 'WindController@create');
Route::get('articles/essay', 'WindController@essay');
Route::get('articles/code', 'WindController@code');
Route::get('articles/daily', 'WindController@daily');

//article pages
Route::get('/articles/{id}', 'WindController@show');
//edit article
//Route::get('articles/{id}/edit', 'WindController@edit');

Route::resource('articles', 'WindController');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);

// 认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





