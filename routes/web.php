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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'RegisterEmployedController@index');
Route::get('user/{id}','RegisterEmployedController@show');
Route::post('register', 'RegisterEmployedController@store');
Route::post('skill', 'RegisterEmployedController@skills');