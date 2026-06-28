<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'ringkasan',
        'isi',
        'gambar',
        'kategori',
        'is_published',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}