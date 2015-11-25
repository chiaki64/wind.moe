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
    return view('admin.create');
});


//Article
Route::get('/article','WindController@index');
Route::get('/article/{id}','WindController@show');//加个限制
Route::get('/articles/{category}','WindController@index');

//Comment
Route::get('/comment','WindController@index');
Route::get('/comment/{id}','WindController@index');

//User


//Note
Route::get('/note','WindController@index');

//Manage
Route::get('/manage/article','WindController@index');
Route::post('/articles','WindController@store');
Route::get('/manage/comment','WindController@index');
Route::get('/manage/user','WindController@index');


//Auth