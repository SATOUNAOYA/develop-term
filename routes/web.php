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
Route::get('/','CalendarController@index');


Route::get('contacts/form/{month}/{day}','ContactController@reservationform');
Route::post('contacts/complete','ContactController@complete');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
