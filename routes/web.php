<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::view('/', 'index')->name('home');

// Route untuk halaman tentang kami
Route::view('/about', 'about')->name('about');

Route::view('/team', 'team')->name('team');
Route::view('/lapkeu', 'lapkeu')->name('lapkeu');
Route::view('/pengaduan', 'pengaduan')->name('pengaduan');

// Route untuk halaman produk
Route::prefix('tabungan')->group(function () {
    Route::view('/', 'tabungan')->name('tabungan');
    Route::view('/tabungan-karimah', 'tabungan-karimah')->name('tabungan-karimah');
    Route::view('/tabungan-ukhuwah', 'tabungan-ukhuwah')->name('tabungan-ukhuwah');
    Route::view('/tabungan-cerdas', 'tabungan-cerdas')->name('tabungan-cerdas');
    Route::view('/tabungan-rencana', 'tabungan-rencana')->name('tabungan-rencana');
});

Route::view('/deposito', 'deposito')->name('deposito');
Route::view('/pembiayaan', 'pembiayaan')->name('pembiayaan');

// Route untuk halaman berita
Route::view('/berita', 'berita')->name('berita');

// Route untuk halaman karir
Route::view('/karir', 'karir')->name('karir');

// Route untuk layanan lainnya
Route::view('/e-asset', 'e-asset')->name('e-asset');
Route::view('/wakaf', 'wakaf')->name('wakaf');
