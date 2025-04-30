<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// Halaman welcome (guest)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Auth routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Dashboard (harus login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Home page dengan carousel produk
    Route::get('/home', [ProductController::class, 'index'])->name('home');

    // Di dalam Route::middleware(['auth'])->group(function () { … });
    Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

});

