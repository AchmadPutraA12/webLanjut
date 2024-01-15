<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'foto',
        'harga',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($produk) {
            // Hapus foto dari storage saat produk dihapus
            Storage::delete("public/produks/{$produk->foto}");
        });
    }
}
