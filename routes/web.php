<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WakafController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AssetFrontendController;
use App\Http\Controllers\KarirFrontendController;

// Static pages
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/team', 'team')->name('team');
Route::view('/pengaduan', 'pengaduan')->name('pengaduan');
Route::view('/penghargaan', 'penghargaan')->name('penghargaan');
Route::view('/karir', 'karir')->name('karir');
Route::view('/asset', 'asset')->name('asset');
Route::view('/edukasi', 'edukasi')->name('edukasi');


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
    Route::view('/tabungan-cahaya', 'tabungan-cahaya')->name('tabungan-cahaya');
});

// Main-Deposito Pages
Route::prefix('main-deposito')->group(function () {
    Route::view('/', 'main-deposito')->name('main-deposito');
    Route::view('/deposito', 'deposito')->name('deposito');
    Route::get('/wakaf', [WakafController::class, 'index'])->name('wakaf.index');
    Route::get('/wakaf/{id}', [WakafController::class, 'show'])->name('wakaf.show');
});

// Karir
Route::get('/karir', [KarirFrontendController::class, 'index'])->name('karir.index');
Route::get('/karir/{id}', [KarirFrontendController::class, 'show'])->name('karir.show');

// Asset
Route::get('/asset', [AssetFrontendController::class, 'index'])->name('asset.index');

// Laporan Keuangan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/lapkeu', [LaporanController::class, 'index'])->name('lapkeu');


// Berita
Route::prefix('berita')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita-all', [BeritaController::class, 'all'])->name('berita-all');
    Route::get('/{id}', [BeritaController::class, 'show'])->name('berita.show');
});

// Route Ajax Paginate
Route::get('/get-nominals', [IndexController::class, 'getNominals'])->name('get.nominals');

Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi.index');
Route::get('/edukasi/{id}', [EdukasiController::class, 'show'])->name('edukasi.show');

Route::get('/ebook', [EbookController::class, 'index'])->name('ebook.index');

Route::get('/update-users-temp', function () {
    // 1. UPDATE/CREATE USER CORSEC
    $corsec = \App\Models\User::where('email', 'corsec@gmail.com')
                ->orWhere('email', 'corsec@email.com')
                ->orWhere('email', 'admin@gmail.com')
                ->first();

    if ($corsec) {
        $corsec->name = 'Corsec';
        $corsec->email = 'corsec@gmail.com';
        $corsec->password = bcrypt('Corsec@123');
        $corsec->save();
        echo "User Corsec berhasil diperbarui!<br>";
    } else {
        \App\Models\User::create([
            'name' => 'Corsec',
            'email' => 'corsec@gmail.com',
            'password' => bcrypt('Corsec@123'),
        ]);
        echo "User Corsec baru berhasil dibuat!<br>";
    }

    // 2. UPDATE/CREATE USER ILHAM
    $ilham = \App\Models\User::where('email', 'ilham@gmail.com')->first();
    if ($ilham) {
        $ilham->name = 'Ilham';
        $ilham->email = 'ilham@gmail.com';
        $ilham->password = bcrypt('Muhammad@1234');
        $ilham->save();
        echo "User Ilham berhasil diperbarui!<br>";
    } else {
        \App\Models\User::create([
            'name' => 'Ilham',
            'email' => 'ilham@gmail.com',
            'password' => bcrypt('Muhammad@1234'),
        ]);
        echo "User Ilham baru berhasil dibuat!<br>";
    }
    
    return "Proses selesai!";
});
