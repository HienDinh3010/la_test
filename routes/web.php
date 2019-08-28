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

Route::get('/xem', 'TestController@xem');
Route::get('/tuongthuat', 'TestController@tuongthuat');
Route::get('listtin/', 'TinController@listtin');
Route::get('listtin/', 'TinController@listtin');
Route::get('laydulieu/',   function () { return view('laydulieu'); });

