<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MultipleuploadsController;


Route::get('/', function () {
    return view ('welcome');
});
Route::get('/mahasiswa', function () {
    return 'Hallo Mahasiswa';
});

Route::get('/mahasiswa/{param1}',
[MahasiswaController::class, 'show']) ;

Route::get('/about', function () {
    return view ('halaman-about');
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1) {
    return 'nim saya: '.$param1;
});

Route::get('/detail', function () {
    return view ('halaman-mahasiswa-detail');
});

Route::get('/profil', function () {
    return view ('halaman-mahasiswa-profil');
});


Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');


Route::get('dashboard', [DashboardController::class, 'index'])
        -> name('dashboard');

Route::resource('/pelanggan', PelangganController::class);

Route::get('/auth', function () {
    return view('home');

});
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('/user', UserController::class);


Route::get('/multipleuploads', 'App\Http\Controllers\MultipleuploadsController@index')->name('uploads');
Route::post('/save','App\Http\Controllers\MultipleuploadsController@store')->name('uploads.store');
