<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Asset extends Model
{
    protected $table = 'assets';

    protected $fillable = [
        'judul',
        'gambar',
        'pemilik',
        'lokasi',
        'harga',
        'pdf',
    ];

    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($asset) {
            // Hapus gambar dan PDF dari penyimpanan
            if ($asset->gambar) {
                Storage::disk('public')->delete($asset->gambar);
            }
            if ($asset->pdf) {
                Storage::disk('public')->delete($asset->pdf);
            }
        });

        static::updating(function ($asset) {
            // Hapus gambar lama dari penyimpanan jika gambar diupdate
            if ($asset->isDirty('gambar')) {
                Storage::disk('public')->delete($asset->getOriginal('gambar'));
            }
            // Hapus PDF lama dari penyimpanan jika PDF diupdate
            if ($asset->isDirty('pdf')) {
                Storage::disk('public')->delete($asset->getOriginal('pdf'));
            }
        });
    }
}
