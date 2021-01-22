<?php

Auth::routes();

Route::fallback(function () {
    return view('layouts.app');
});


/*Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// роуты группы для создание просмотра, просмотра поздравления, подтверждения участия в поздравление
Route::group([
    'namespace' => 'Room',
], function() {
    Route::resource('room', 'RoomController')->middleware('auth');// если у ресуоса будут неиспользуемые роуты, то нужно не забыть их закрыть, к примру destroy, врядли будем использовать
    Route::get('/rooms/{room}/invite', 'InviteController@invite')->name('invite');
    Route::get('/rooms/{room}/join', 'JoinController@index')->name('join');
    Route::get('/rooms/{room}/exit', 'ExitController@index')->name('exit');
    Route::post('/budget', 'BudgetController@store');
    Route::post('/message', 'ChatController@index');
    Route::get('/message/{id}', 'ChatController@all');
});

Route::group([
    'namespace' => 'Social',
], function () {
    Route::get('login/vk', 'LoginVKController@redirectToProvider')->name('loginVK');
    Route::get('login/vk/callback', 'LoginVKController@handleProviderCallback');
});*/
