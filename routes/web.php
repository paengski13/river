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

Route::get('', 'HomeController')->name('homepage');

Route::prefix('booking')->name('booking.')->group(function () {
    Route::get('', 'BookingController@index')->name('index');
    Route::post('/store', 'BookingController@store')->name('store');
});
