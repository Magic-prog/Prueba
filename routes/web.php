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



Route::group(
    ['namespace' => 'Jeronimo','prefix' => 'jeronimo'], 
    function () {
        Route::get('jeronimo/index','JeronimoController@index')->name('jeronimo.index');
});

Route::group(
    ['namespace' => 'Samuel','prefix' => 'samuel'], 
    function () {
        Route::get('samuel/index','SamuelController@index')->name('samuel.index');
});