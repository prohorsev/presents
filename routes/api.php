<?php

use Illuminate\Http\Request;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'Room',
], function () {
    Route::post('/message', 'ChatController@index');
    Route::get('/message/{id}', 'ChatController@all');
    Route::post('/budget', 'BudgetController@store');
});



