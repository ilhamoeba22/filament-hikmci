<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Carousel;
use App\Models\RateDeposito;
use App\Models\Nominal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $beritaTerakhir = Berita::latest()->take(3)->get();
        $carousels = Carousel::all();
        $rateDeposito = RateDeposito::whereNotNull('bulan')->get(); // Ambil data rate deposito yang memiliki bulan
        $nominals = Nominal::all(); // Ambil data nominal dengan pagination, 15 item per halaman
        return view('index', compact('beritaTerakhir', 'carousels', 'rateDeposito', 'nominals'));
    }

    public function getNominals(Request $request)
    {
        if ($request->ajax()) {
            $offset = $request->input('offset', 0); // Posisi awal
            $limit = $request->input('limit', 10); // Jumlah data per permintaan
            $nominals = Nominal::skip($offset)->take($limit)->get();

            return view('nominals', compact('nominals'))->render(); // Kembalikan view data
        }
        abort(404); // Jika bukan permintaan AJAX, kembalikan error 404
    }
}
