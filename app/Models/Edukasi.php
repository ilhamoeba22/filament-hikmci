<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Edukasi extends Model
{
    protected $table = 'edukasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
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
