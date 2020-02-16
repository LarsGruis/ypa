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

Route::get('getcars', 'RdwController@getAllCars');
Route::get('/carsdetail/{id}', 'RdwController@getCarsDetail');
Route::get('getcar/{brand}', 'RdwController@getCars');
Route::get('getCarsbydate/{date}', 'RdwController@getCarsByDate');
Route::get('/getTenCars', 'RdwController@getTenCars');