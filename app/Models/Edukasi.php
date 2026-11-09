<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Edukasi extends Model
{
    protected $table = 'edukasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];

    protected $appends = [
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the accessible public URL for the edukasi image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->gambar)) {
            return asset('frontend/img/logo/logo_mci.png');
        }

        // Full URL
        if (Str::startsWith($this->gambar, ['http://', 'https://'])) {
            return $this->gambar;
        }

        $gambar = ltrim($this->gambar, '/');

        // Path already prefixed with storage/
        if (Str::startsWith($gambar, 'storage/')) {
            return asset($gambar);
        }

        // Path already prefixed with edukasi/
        if (Str::startsWith($gambar, 'edukasi/')) {
            return asset('storage/' . $gambar);
        }

        // Standard Filament disk 'edukasi' storage path (e.g., images/filename.ext)
        return asset('storage/edukasi/' . $gambar);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($edukasi) {
            if ($edukasi->gambar) {
                Storage::disk('edukasi')->delete($edukasi->gambar);
            }
        });

        static::updating(function ($edukasi) {
            if ($edukasi->isDirty('gambar')) {
                Storage::disk('edukasi')->delete($edukasi->getOriginal('gambar'));
            }
        });
    }
}
