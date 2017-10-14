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
//Route Dokter
Route::resource('dokter', 'DokterController');

//Route Resep
Route::resource('resep', 'ResepController');

//Route Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
