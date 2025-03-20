<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Rute untuk halaman login dan register

Route::group(['middleware' => ['role:administrator']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::group(['middleware' => ['role:teacher']], function () {
    Route::get('/teacher', [TeacherController::class, 'index']);
});

Route::group(['middleware' => ['role:student']], function () {
    Route::get('/student', [StudentController::class, 'index']);
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

// Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('handleLogin');

// Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'handleRegister'])->name('handleRegister');

// Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Rute untuk administrator
Route::middleware(['auth', 'role:administrator'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
});

// Rute untuk guru
Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', function () {
        return view('teacher.dashboard');
    })->name('teacher.dashboard');

    Route::get('/teacher/classes', function () {
        return view('teacher.classes');
    })->name('teacher.classes');
});

// Rute untuk siswa
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');

    Route::get('/student/assignments', function () {
        return view('student.assignments');
    })->name('student.assignments');
});

Route::get('/', function () {
    return view('welcome');
});
