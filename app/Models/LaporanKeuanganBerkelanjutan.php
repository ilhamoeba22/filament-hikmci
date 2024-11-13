<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanKeuanganBerkelanjutan extends Model
{
    protected $table = 'laporan_keuangan_berkelanjutans';
    protected $fillable = [
        'judul',
        'file',
        'tahun',
    ];

    public $timestamps = true;
}
