<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EbookController extends Controller
{
    /**
     * Menampilkan halaman daftar E-Book (publik)
     */
    public function index(): View
    {
        $ebooks = Cache::remember('web:ebook:all', 86400, function () {
            return Ebook::latest()->get();
        });

        return view('ebook', compact('ebooks'));
    }
}
