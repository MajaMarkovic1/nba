<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TeamController@index');
Route::get('/teams/{id}', 'TeamController@show');
Route::get('/players/{id}', 'PlayerController@show');
Route::get('/register', 'RegisterController@create')->name('register');
Route::post('/register', 'RegisterController@store');
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');
Route::post('/teams/{id}/comments', 'CommentController@store');
Route::get('/user/{id}', 'RegisterController@verify');
Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show');
Route::get('/news/team/{name}', 'NewsController@showNewsForTeam');
Route::get('/create', 'NewsController@create');
Route::post('/news', 'NewsController@store');