<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\LaporanKeuanganBerkelanjutan;
use App\Models\LaporanPublikasi;
use App\Models\LaporanTahunan;
use App\Models\LaporanTataKelola;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class LaporanController extends Controller
{
    public function index(): View
    {
        $laporanData = Cache::remember('web:lapkeu:all', 86400, function () {
            return [
                'laporanPublikasi' => LaporanPublikasi::orderBy('tahun', 'desc')->get(),
                'laporanTataKelola' => LaporanTataKelola::orderBy('tahun', 'desc')->get(),
                'laporanKeuanganBerkelanjutan' => LaporanKeuanganBerkelanjutan::orderBy('tahun', 'desc')->get(),
                'laporanTahunan' => LaporanTahunan::orderBy('tahun', 'desc')->get(),
            ];
        });

        $laporanPublikasi = $laporanData['laporanPublikasi'];
        $laporanTataKelola = $laporanData['laporanTataKelola'];
        $laporanKeuanganBerkelanjutan = $laporanData['laporanKeuanganBerkelanjutan'];
        $laporanTahunan = $laporanData['laporanTahunan'];

        return view('lapkeu', compact('laporanPublikasi', 'laporanTataKelola', 'laporanKeuanganBerkelanjutan', 'laporanTahunan'));
    }
}
