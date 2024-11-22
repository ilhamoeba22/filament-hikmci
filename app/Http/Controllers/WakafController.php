<?php

namespace App\Http\Controllers;

use App\Models\Wakaf;
use Illuminate\Http\Request;

class WakafController extends Controller
{
    public function index()
    {
        $wakafs = Wakaf::orderBy('created_at', 'desc')->take(3)->get();
        return view('wakaf', compact('wakafs'));
    }

    public function show($id)
    {
        $wakaf = Wakaf::findOrFail($id);
        $wakafLainnya = Wakaf::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(5)->get();
        return view('wakaf-detail', compact('wakaf', 'wakafLainnya'));
    }
}
