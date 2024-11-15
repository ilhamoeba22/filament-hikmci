<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class KarirFrontendController extends Controller
{
    public function index()
    {
        $karirs = Karir::paginate(6); // Menampilkan 6 item per halaman
        return view('karir', compact('karirs'));
    }

    public function show($id)
    {
        $karir = Karir::findOrFail($id);
        return view('karir', compact('karir'));
    }
}
