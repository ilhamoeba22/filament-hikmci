<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebooks';
    protected $fillable = [
        'judul',
        'gambar',
        'file_pdf',
    ];

    // Tentukan disk yang sama dengan Edukasi
    protected static $disk = 'edukasi';

    protected static function boot()
    {
        parent::boot();

        // Logika saat data DIHAPUS
        static::deleting(function ($ebook) {
            if ($ebook->gambar) {
                Storage::disk(static::$disk)->delete($ebook->gambar);
            }
            if ($ebook->file_pdf) {
                Storage::disk(static::$disk)->delete($ebook->file_pdf);
            }
        });

        // Logika saat data DI-UPDATE
        static::updating(function ($ebook) {
            // Jika gambar diganti, hapus gambar lama
            if ($ebook->isDirty('gambar') && $ebook->getOriginal('gambar')) {
                Storage::disk(static::$disk)->delete($ebook->getOriginal('gambar'));
            }
            // Jika PDF diganti, hapus PDF lama
            if ($ebook->isDirty('file_pdf') && $ebook->getOriginal('file_pdf')) {
                Storage::disk(static::$disk)->delete($ebook->getOriginal('file_pdf'));
            }
        });
    }
}
