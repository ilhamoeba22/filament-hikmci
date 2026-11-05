<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Wakaf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WakafController extends Controller
{
    public function index(): View
    {
        $wakafs = Cache::remember('web:wakaf:all', 86400, function () {
            return Wakaf::orderBy('created_at', 'desc')->take(3)->get();
        });

        return view('wakaf', compact('wakafs'));
    }

    public function show(int|string $id): View
    {
        $wakaf = Wakaf::findOrFail($id);
        $wakafLainnya = Wakaf::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(5)->get();

        return view('wakaf-detail', compact('wakaf', 'wakafLainnya'));
    }
}
