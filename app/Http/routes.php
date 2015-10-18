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
Route::get('/home', 'WindController@home');

//article create(顺序重要)
Route::get('articles/create', 'WindController@create');
Route::get('articles/essay', 'WindController@essay');
Route::get('articles/code', 'WindController@code');
Route::get('articles/daily', 'WindController@daily');

//article pages
Route::get('/articles/{id}', 'WindController@show');
//edit article
//Route::get('articles/{id}/edit', 'WindController@edit');


Route::resource('articles', 'WindController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*
// 認證路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 註冊路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

*/



