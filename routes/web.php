<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('index');

/* Login, Register, Reset */
Route::post('/signup', [RegisterController::class, 'store'])->name('signup');
Route::get('/logout', [LogoutController::class, 'logout']);
Route::post('/login', [LoginController::class, 'store']);

/* Only accessable by guests */
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/signup', [RegisterController::class, 'index'])->name('register');
});


// Route::get('/search', [RegisterController::class, 'index'])->name('register');
