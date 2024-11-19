<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AssetFrontendController;
use App\Http\Controllers\KarirFrontendController;

// Static pages
Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/team', 'team')->name('team');
// Ubah route ini untuk menggunakan controller
Route::get('/lapkeu', [LaporanController::class, 'index'])->name('lapkeu');
Route::view('/pengaduan', 'pengaduan')->name('pengaduan');
Route::view('/deposito', 'deposito')->name('deposito');
Route::view('/berita', 'berita')->name('berita');
Route::view('/karir', 'karir')->name('karir');
Route::view('/asset', 'asset')->name('asset');
Route::view('/wakaf', 'wakaf')->name('wakaf');

// Pembiayaan Pages
Route::prefix('pembiayaan')->group(function () {
    Route::view('/', 'pembiayaan')->name('pembiayaan');
    Route::view('/pembiayaan-consumer-finance', 'pembiayaan-consumer-finance')->name('pembiayaan-consumer-finance');
    Route::view('/pembiayaan-corporate', 'pembiayaan-corporate')->name('pembiayaan-corporate');
    Route::view('/pembiayaan-property', 'pembiayaan-property')->name('pembiayaan-property');
    Route::view('/pembiayaan-umkm', 'pembiayaan-umkm')->name('pembiayaan-umkm');
});

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

// Laporan Keuangan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
