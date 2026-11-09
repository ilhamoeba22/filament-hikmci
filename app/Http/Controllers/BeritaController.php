<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(): View
    {
        $berita = Berita::with('user')->latest()->first();
        $beritaTerkini = $berita
            ? Berita::with('user')->where('id', '!=', $berita->id)->latest()->take(5)->get()
            : Berita::with('user')->latest()->take(5)->get();

        $metaTitle = $berita ? ($berita->judul . ' - Berita BPRS HIK MCI') : 'Kabar Berita - BPRS HIK MCI';
        $metaDescription = $berita ? Str::limit(strip_tags($berita->isi), 160) : 'Informasi dan berita terkini PT BPRS HIK MCI.';
        $ogImage = $berita?->image_url ?? asset('frontend/img/logo/logo_mci.png');
        $canonicalUrl = $berita ? $berita->share_url : route('berita');

        return view('berita', compact('berita', 'beritaTerkini', 'metaTitle', 'metaDescription', 'ogImage', 'canonicalUrl'));
    }

    public function all(): View
    {
        $beritas = Berita::with('user')->latest()->paginate(6);
        $metaTitle = 'Semua Berita & Informasi - BPRS HIK MCI';
        $metaDescription = 'Arsip lengkap publikasi kegiatan, siaran pers, dan liputan berita PT BPRS HIK MCI.';

        return view('berita-all', compact('beritas', 'metaTitle', 'metaDescription'));
    }

    public function show(int|string $id): View
    {
        $recordId = is_numeric($id) ? (int)$id : (int)explode('-', (string)$id)[0];
        $berita = Berita::with('user')->findOrFail($recordId);
        $beritaTerkini = Berita::with('user')
            ->where('id', '!=', $berita->id)
            ->latest()
            ->take(5)
            ->get();

        $metaTitle = $berita->judul . ' - Berita BPRS HIK MCI';
        $metaDescription = Str::limit(strip_tags($berita->isi), 160);
        $ogImage = $berita->image_url;
        $canonicalUrl = $berita->share_url;

        return view('berita', compact('berita', 'beritaTerkini', 'metaTitle', 'metaDescription', 'ogImage', 'canonicalUrl'));
    }
}
