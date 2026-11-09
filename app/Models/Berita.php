<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'isi',
        'lokasi',
        'gambar',
        'user_id',
        'created_at',
    ];

    protected $appends = [
        'slug',
        'share_url',
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get URL-friendly slug for the article title.
     */
    public function getSlugAttribute(): string
    {
        return Str::slug($this->judul ?: 'berita');
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
        return route('berita.show', $this->id . '-' . $this->slug);
    }

    /**
     * Get the accessible public URL for the news image.
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

        if (Str::startsWith($gambar, 'berita/')) {
            return asset('storage/' . $gambar);
        }

        return asset('storage/berita/' . $gambar);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($berita) {
            if ($berita->isDirty('gambar')) {
                if ($berita->getOriginal('gambar')) {
                    Storage::disk('berita')->delete($berita->getOriginal('gambar'));
                }
            }
        });

        static::deleting(function ($berita) {
            if ($berita->gambar) {
                Storage::disk('berita')->delete($berita->gambar);
            }
        });
    }
}
