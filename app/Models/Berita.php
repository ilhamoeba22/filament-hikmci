<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
