<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Carousel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $beritaTerakhir = Berita::latest()->take(3)->get();
        $carousels = Carousel::all();
        return view('index', compact('beritaTerakhir', 'carousels'));
    }
}
