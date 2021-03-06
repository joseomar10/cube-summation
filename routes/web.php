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

Route::get('/home/', 'CubeController@index');
Route::post('/create/', 'CubeController@postCreate');
Route::post('/update/', 'CubeController@postUpdate');
Route::post('/query/', 'CubeController@postQuery');