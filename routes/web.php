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
Route::get('/', 'Auth\LoginController@index');
Route::get('login', 'Auth\LoginController@index');
Route::get('/dashboard', 'Auth\LoginController@dashboard'); 
Route::post('post-login', 'Auth\LoginController@postLogin'); 
Route::get('logout', 'Auth\LoginController@logout');

Route::any('register', 'Auth\RegisterController@register');
Route::get('citylist','Auth\RegisterController@getCityList');


/*
Route::get('/', function () {
    Route::get('/', 'Auth\LoginController@index');
});*/
