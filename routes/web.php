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

Route::get('/','Home@index');

Route::resource('/users_laravel','UserController');
Route::resource('/users_jquery','UserJqueryController');
Route::resource('/users_vue','UserJqueryController');
Route::get('/get_users','UserJqueryController@show');
