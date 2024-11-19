<?php

namespace App\Http\Controllers;

use App\Models\LaporanPublikasi;
use App\Models\LaporanTataKelola;
use App\Models\LaporanKeuanganBerkelanjutan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporanPublikasi = LaporanPublikasi::all();
        $laporanTataKelola = LaporanTataKelola::all();
        $laporanKeuanganBerkelanjutan = LaporanKeuanganBerkelanjutan::all();

        return view('lapkeu', compact('laporanPublikasi', 'laporanTataKelola', 'laporanKeuanganBerkelanjutan'));
    }
}
