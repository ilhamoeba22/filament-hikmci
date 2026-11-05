<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(): View
    {
        $berita = Berita::with('user')->latest()->first();
        $beritaTerkini = $berita
            ? Berita::with('user')->where('id', '!=', $berita->id)->latest()->take(5)->get()
            : Berita::with('user')->latest()->take(5)->get();

        return view('berita', compact('berita', 'beritaTerkini'));
    }

    public function all(): View
    {
        $beritas = Berita::with('user')->latest()->paginate(6);

        return view('berita-all', compact('beritas'));
    }

    public function show(int|string $id): View
    {
        $berita = Berita::with('user')->findOrFail($id);
        $beritaTerkini = Berita::with('user')
            ->where('id', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        return view('berita', compact('berita', 'beritaTerkini'));
    }
}
