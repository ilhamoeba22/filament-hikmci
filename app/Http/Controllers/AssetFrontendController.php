<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetFrontendController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        return view('asset', compact('assets'));
    }
}
