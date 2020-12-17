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


Auth::routes();

Route::get('/', 'BoxController@index')->name('home');
Route::get('/gifts', 'GiftController@index')->name('gifts')->middleware('auth');
Route::get('/addgift/{gift}', 'GiftController@addGift')->name('addGift');
Route::get('/open', 'BoxController@open')->name('boxOpen');
Route::get('/profile', 'ProfileController@index')->name('profile');
