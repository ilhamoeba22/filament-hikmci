<?php

namespace App\Http\Controllers;

use App\Models\PiagamAuditInternal;
use Illuminate\Http\Request;

class PiagamAuditController extends Controller
{
    /**
     * Menampilkan halaman Piagam Audit Internal (publik)
     */
    public function index()
    {
        $piagams = PiagamAuditInternal::orderBy('tahun', 'desc')->latest()->get();

        return view('piagam_audit', compact('piagams'));
    }
}
