<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Carousel;
use App\Models\Nominal;
use App\Models\RateDeposito;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index(): View
    {
        $beritaTerakhir = Cache::remember('web:home:berita_terakhir', 3600, function () {
            return Berita::latest()->take(3)->get();
        });

        $carousels = Cache::remember('web:home:carousels', 86400, function () {
            return Carousel::all();
        });

        $rateDeposito = Cache::remember('web:home:rates', 86400, function () {
            return RateDeposito::whereNotNull('bulan')->get(); // Ambil data rate deposito yang memiliki bulan
        });

        $nominals = Cache::remember('web:home:nominals', 86400, function () {
            return Nominal::all(); // Ambil data nominal
        });

        return view('index', compact('beritaTerakhir', 'carousels', 'rateDeposito', 'nominals'));
    }

    public function deposito(): View
    {
        $rateDeposito = Cache::remember('web:deposito:rates', 86400, function () {
            return RateDeposito::whereNotNull('bulan')->get();
        });

        $nominals = Cache::remember('web:deposito:nominals', 86400, function () {
            return Nominal::all();
        });

        return view('deposito', compact('rateDeposito', 'nominals'));
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
