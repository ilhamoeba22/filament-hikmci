<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Illuminate\Support\Str;

class AssetFrontendController extends Controller
{
    public function index()
    {
        $assets = Asset::latest()->paginate(6);
        $metaTitle = 'E-Asset BPRS HIK MCI - Portofolio Agunan & Properti';
        $metaDescription = 'Daftar agunan dan aset potensial siap jual atau lelang dengan legalitas terjamin dan proses transparan bersama BPRS HIK MCI.';
        return view('asset', compact('assets', 'metaTitle', 'metaDescription'));
    }

    public function show($id)
    {
        $recordId = is_numeric($id) ? (int)$id : (int)explode('-', (string)$id)[0];
        $asset = Asset::findOrFail($recordId);
        $assetsLainnya = Asset::where('id', '!=', $asset->id)->latest()->take(3)->get();

        $metaTitle = $asset->judul . ' - E-Asset BPRS HIK MCI';
        $metaDescription = 'Informasi resmi aset dan agunan siap jual/lelang dari PT BPRS HIK MCI: ' . $asset->judul;
        $ogImage = $asset->image_url;
        $canonicalUrl = $asset->share_url;

        return view('asset-detail', compact('asset', 'assetsLainnya', 'metaTitle', 'metaDescription', 'ogImage', 'canonicalUrl'));
    }
}
