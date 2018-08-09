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
    if(Auth::guest()){
    	return Redirect::to('login');
    }

    if(Auth::check()){
    	return Redirect::to('home');
    }
});

Route::post('auth/get_zones','Auth\RegisterController@get_zones');

Auth::routes();
Route::get('/logout' , 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
