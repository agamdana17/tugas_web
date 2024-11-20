<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/sell', function () {
    return view('sell');
});

Route::get('/about', function () {
    return view('about');
});