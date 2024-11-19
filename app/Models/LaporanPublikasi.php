<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class LaporanPublikasi extends Model
{
    protected $table = 'laporan_publikasis';
    protected $fillable = [
        'judul',
        'file',
        'tahun',
    ];

    public $timestamps = true;
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->isDirty('file')) {
                Storage::disk('public')->delete($model->getOriginal('file'));
            }
        });

        static::deleting(function ($model) {
            Storage::disk('public')->delete($model->file);
        });
    }
}
