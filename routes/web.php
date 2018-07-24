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

Route::get('/teams', 'TeamController@index');
Route::get('/teams/{id}', 'TeamController@show');
Route::get('/players/{id}', 'PlayerController@show');
Route::get('/register', 'RegisterController@create')->name('register');
Route::post('/register', 'RegisterController@store');