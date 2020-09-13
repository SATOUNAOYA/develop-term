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



Route::get('contacts/form','ContactController@form');
Route::post('contacts/complete','ContactController@complete');
Route::get('contacts/reservationinformation','ContactController@index');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
