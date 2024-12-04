<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
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
