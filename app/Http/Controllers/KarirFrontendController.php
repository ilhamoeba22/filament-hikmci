<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class KarirFrontendController extends Controller
{
    public function index()
    {
        $karirs = Karir::all();
        return view('karir', compact('karirs'));
    }

    public function show($id)
    {
        $karir = Karir::findOrFail($id);
        return view('karir', compact('karir'));
    }
}
