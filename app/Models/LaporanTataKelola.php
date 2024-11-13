<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanTataKelola extends Model
{
    protected $table = 'laporan_tata_kelolas';
    protected $fillable = [
        'judul',
        'file',
        'tahun',
    ];

    public $timestamps = true;
}
