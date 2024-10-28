<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome'); // ini merujuk ke halaman welcome.blade.php di folder resource/views
});

Route::get('/index', function () {
    return view('index'); // ini merujuk ke halaman welcome 
});

Route::get('/login', function () {
    return view('login'); // ini merujuk ke halaman login
});

Route::get('/about', function () {
    return view('about'); // ini merujuk ke halaman login
});

Route::get('/index', [HomeController::class, 'index']);