<?php

Auth::routes();

Route::fallback(function () {
    return view('layouts.app');
});



