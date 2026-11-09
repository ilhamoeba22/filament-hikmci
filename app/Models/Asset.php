<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    protected $appends = [
        'slug',
        'share_url',
        'image_url',
    ];

    /**
     * Get URL-friendly slug for the asset title.
     */
    public function getSlugAttribute(): string
    {
        return Str::slug($this->judul ?: 'e-asset');
    }

    /**
     * Get route key for implicit route model binding or route helper.
     */
    public function getRouteKey(): mixed
    {
        return $this->id . '-' . $this->slug;
    }

    /**
     * Get the full canonical shareable URL with slug.
     */
    public function getShareUrlAttribute(): string
    {
        return route('asset.show', $this->id . '-' . $this->slug);
    }

    /**
     * Get the accessible public URL for the asset flyer/image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->gambar)) {
            return asset('frontend/img/logo/logo_mci.png');
        }

        if (Str::startsWith($this->gambar, ['http://', 'https://'])) {
            return $this->gambar;
        }

        $gambar = ltrim($this->gambar, '/');

        if (Str::startsWith($gambar, 'storage/')) {
            return asset($gambar);
        }

        return asset('storage/' . $gambar);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($asset) {
            $asset->pemilik = $asset->pemilik ?? '-';
            $asset->lokasi = $asset->lokasi ?? '-';
            $asset->harga = $asset->harga ?? 0;
            $asset->pdf = $asset->pdf ?? '';
        });

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
