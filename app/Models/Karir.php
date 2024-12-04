<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Karir extends Model
{
    protected $table = 'karirs';

    protected $fillable = [
        'judul',
        'gambar',
    ];

    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($karir) {
            if ($karir->gambar) {
                Storage::disk('public')->delete($karir->gambar);
            }
        });

        static::updating(function ($karir) {
            if ($karir->isDirty('gambar')) {
                Storage::disk('public')->delete($karir->getOriginal('gambar'));
            }
        });
    }
}
