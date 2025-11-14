<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    /**
     * Menampilkan halaman daftar E-Book (publik)
     */
    public function index() // <-- Hapus Request $request
    {
        $ebooks = Ebook::latest()->get();

        return view('ebook', compact('ebooks'));
    }
}
