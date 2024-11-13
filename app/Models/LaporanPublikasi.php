<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanPublikasi extends Model
{
    protected $table = 'laporan_publikasis';
    protected $fillable = [
        'judul',
        'file',
        'tahun',
    ];

    public $timestamps = true;
}
