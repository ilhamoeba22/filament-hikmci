<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EdukasiController extends Controller
{
    public function index()
    {
        $edukasis = Edukasi::paginate(10);
        $metaTitle = 'Edukasi & Literasi Keuangan Syariah - BPRS HIK MCI';
        $metaDescription = 'Tingkatkan pemahaman mengenai prinsip perbankan syariah, tips perencanaan finansial, dan muamalah berkeadilan.';
        return view('edukasi', compact('edukasis', 'metaTitle', 'metaDescription'));
    }

    public function show($id)
    {
        $recordId = is_numeric($id) ? (int)$id : (int)explode('-', (string)$id)[0];
        $edukasi = Edukasi::findOrFail($recordId);
        $edukasiLainnya = Edukasi::where('id', '!=', $edukasi->id)->latest()->take(5)->get();

        $metaTitle = $edukasi->judul . ' - Literasi Syariah BPRS HIK MCI';
        $metaDescription = Str::limit(strip_tags($edukasi->isi), 160);
        $ogImage = $edukasi->image_url;
        $canonicalUrl = $edukasi->share_url;

        return view('edukasi-detail', compact('edukasi', 'edukasiLainnya', 'metaTitle', 'metaDescription', 'ogImage', 'canonicalUrl'));
    }
}
