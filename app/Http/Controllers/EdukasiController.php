<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        $edukasis = Edukasi::paginate(10);
        return view('edukasi', compact('edukasis'));
    }

    public function show($id)
    {
        $edukasi = Edukasi::findOrFail($id);
        $edukasiLainnya = Edukasi::where('id', '!=', $id)->latest()->take(5)->get();
        return view('edukasi-detail', compact('edukasi', 'edukasiLainnya'));
    }
}
