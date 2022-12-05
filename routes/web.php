<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    SiswaController,
    KelasController,
    JurusanController,
    ProfileController,
    UserController
};

Route::get('/', function () {
    return view('welcome');
});

//Login & Register
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

//Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/simpanRegister', [AuthController::class, 'simpanRegister'])->name('simpanRegister');

//Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::group(['middleware' => ['auth', 'checkrole:1']], function(){
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    //Jurusan
    Route::get('/jurusan/data', [JurusanController::class, 'data'])->name('jurusan.data');
    Route::resource('/jurusan', JurusanController::class);
    
    //Siswa
    Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
    Route::get('/siswa/pdf/{id}', [SiswaController::class, 'pdf'])->name('siswa.pdf');
    Route::get('/siswa/all', [SiswaController::class, 'all'])->name('all.pdf');

    Route::resource('/siswa', SiswaController::class);
    
    //Profile
    Route::resource('/profile', ProfileController::class);

    //User
    Route::resource('/user', UserController::class);
// });

// Route::group(['middleware' => ['auth', 'checkrole:1, 2']], function(){
    Route::resource('/profile', ProfileController::class);
// });