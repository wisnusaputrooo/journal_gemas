<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Rute untuk halaman tentang
Route::get('/about', function () {
    return view('pages.about');
});

// Rute untuk autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk halaman admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/settings', function () {
        return view('admin.settings');
    });
});

// Rute untuk halaman error
Route::fallback(function () {
    return view('errors.404');
});
