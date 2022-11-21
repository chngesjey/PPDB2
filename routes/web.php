<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    SiswaController,
    KelasController,
    JurusanController
};

Route::get('/', function () {
    return view('welcome');
});

// Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/simpanRegister', [AuthController::class, 'simpanRegister'])->name('simpanRegister');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 

// Route Siswa
Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
Route::get('/siswa/pdf/{id}', [SiswaController::class, 'pdf'])->name('siswa.pdf');
Route::resource('/siswa', SiswaController::class);

/// Route Kelas
Route::get('/kelas/data', [KelasController::class, 'data'])->name('kelas.data');
Route::resource('/kelas', KelasController::class);

// Route Jurusan
Route::get('/jurusan/data', [JurusanController::class, 'data'])->name('jurusan.data');
Route::resource('/jurusan', JurusanController::class);
