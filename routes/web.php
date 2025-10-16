<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;



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
