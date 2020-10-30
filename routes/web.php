<?php

use Illuminate\Support\Facades\Route;

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

//vehicle用
Route::get('/vehicles','VehicleController@index');
Route::get('/vehicles/create','VehicleController@create');
Route::post('/vehicles','VehicleController@store');
Route::get('/vehicles/{id}','VehicleController@edit');
Route::put('/vehicles/{id}','VehicleController@update');
Route::delete('/vehicles/{id}', 'VehicleController@destroy');