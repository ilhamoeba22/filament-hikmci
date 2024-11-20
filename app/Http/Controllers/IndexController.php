<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $beritaTerakhir = Berita::latest()->take(3)->get();
        return view('index', compact('beritaTerakhir'));
    }
}
