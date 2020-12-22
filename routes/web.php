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


Auth::routes();

// роуты группы для создание просмотра, просмотра поздравления, подтверждения участия в поздравление
Route::group([
    'namespace' => 'Room',
], function() {
    Route::resource('room', 'RoomController');
    Route::get('/rooms/{room}/invite', 'InviteController@invite')->name('invite');
    Route::get('/rooms/{room}/join', 'JoinController@index')->name('join');
});


Route::get('/', 'BoxController@index')->name('home');
Route::get('/congratulation', 'CongratulationController@index')->name('congratulation');
Route::get('/gifts', 'GiftController@index')->name('gifts')->middleware('auth');
Route::get('/addgift/{gift}', 'GiftController@addGift')->name('addGift');
Route::get('/open', 'BoxController@open')->name('boxOpen');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/friends', 'FriendsController@index')->name('friends');

Route::get('login/vk', 'LoginVKController@redirectToProvider')->name('loginVK');
Route::get('login/vk/callback', 'LoginVKController@handleProviderCallback');
