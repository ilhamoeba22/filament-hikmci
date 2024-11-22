<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Wakaf extends Model
{
    protected $table = 'wakafs';

    protected $fillable = [
        'judul',
        'gambar_cover',
        'gambar_detail',
        'deskripsi',
        'target',
        'lokasi',
        'nahzir',
        'status',
    ];

    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($wakaf) {
            // Hapus gambar dari penyimpanan
            if ($wakaf->gambar_cover) {
                Storage::disk('public')->delete($wakaf->gambar_cover);
            }
            if ($wakaf->gambar_detail) {
                Storage::disk('public')->delete($wakaf->gambar_detail);
            }
        });

        static::updating(function ($wakaf) {
            // Hapus gambar lama dari penyimpanan jika gambar diupdate
            if ($wakaf->isDirty('gambar_cover')) {
                Storage::disk('public')->delete($wakaf->getOriginal('gambar_cover'));
            }
            if ($wakaf->isDirty('gambar_detail')) {
                Storage::disk('public')->delete($wakaf->getOriginal('gambar_detail'));
            }
        });
    }
}
