<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk halaman register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route untuk menangani registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login'); // Sesuaikan dengan lokasi file Blade login
})->name('login');

// Route untuk menangani proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route untuk logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Route yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

