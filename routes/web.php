<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetFrontendController;
use App\Http\Controllers\KarirFrontendController;

// Static pages
Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/team', 'team')->name('team');
Route::view('/lapkeu', 'lapkeu')->name('lapkeu');
Route::view('/pengaduan', 'pengaduan')->name('pengaduan');
Route::view('/deposito', 'deposito')->name('deposito');
Route::view('/pembiayaan', 'pembiayaan')->name('pembiayaan');
Route::view('/berita', 'berita')->name('berita');
Route::view('/karir', 'karir')->name('karir');
Route::view('/asset', 'asset')->name('asset');
Route::view('/wakaf', 'wakaf')->name('wakaf');

// Tabungan pages
Route::prefix('tabungan')->group(function () {
    Route::view('/', 'tabungan')->name('tabungan');
    Route::view('/tabungan-karimah', 'tabungan-karimah')->name('tabungan-karimah');
    Route::view('/tabungan-ukhuwah', 'tabungan-ukhuwah')->name('tabungan-ukhuwah');
    Route::view('/tabungan-cerdas', 'tabungan-cerdas')->name('tabungan-cerdas');
    Route::view('/tabungan-rencana', 'tabungan-rencana')->name('tabungan-rencana');
});

// karir
Route::get('/karir', [KarirFrontendController::class, 'index'])->name('karir.index');
Route::get('/karir/{id}', [KarirFrontendController::class, 'show'])->name('karir.show');

// asset
Route::get('/asset', [AssetFrontendController::class, 'index'])->name('asset.index');
