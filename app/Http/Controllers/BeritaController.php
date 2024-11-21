<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritaTerkini = Berita::with('user')->latest()->take(5)->get();
        $berita = Berita::with('user')->latest()->first();
        return view('berita', compact('berita', 'beritaTerkini'));
    }

    public function all()
    {
        $beritas = Berita::with('user')->latest()->paginate(6);
        return view('berita-all', compact('beritas'));
    }

    public function show($id)
    {
        $berita = Berita::with('user')->findOrFail($id);
        $beritaTerkini = Berita::with('user')->latest()->take(5)->get();
        return view('berita', compact('berita', 'beritaTerkini'));
    }
}
