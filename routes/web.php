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
    return view('wellsanber');
});
Route::get('/form','RegisterController@form');
Route::get('/wellsanber','RegisterController@wellsanber');
Route::get('selamat','RegisterController@selamat');