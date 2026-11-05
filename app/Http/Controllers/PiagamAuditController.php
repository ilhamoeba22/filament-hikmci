<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PiagamAuditInternal;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PiagamAuditController extends Controller
{
    /**
     * Menampilkan halaman Piagam Audit Internal (publik)
     */
    public function index(): View
    {
        $piagams = Cache::remember('web:piagam_audit:all', 86400, function () {
            return PiagamAuditInternal::latest()->get();
        });

        return view('piagam_audit', compact('piagams'));
    }
}
