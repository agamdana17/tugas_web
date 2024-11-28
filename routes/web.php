<?php

use App\Http\Controllers\AuthController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

#Route::view("/", "/layouts/welcome");
Route::middleware("auth")->group(function(){
    Route::view("/", "home")->name("hometo");
});

Route::middleware("auth")->group(function(){
    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');
});


Route::get('/login', [AuthController::class, "login"])
    ->name("login");

Route::post('/login', [AuthController::class, "loginPost"])
    ->name("login.post");

Route::get("/register", [AuthController::class, "register"])
    ->name("register");

Route::post('/register', [AuthController::class, "registerPost"])
    ->name("register.post");

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/sell', function () {
    return view('sell');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});
