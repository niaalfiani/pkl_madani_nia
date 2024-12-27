<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primarykey = 'id';
    protected $guarded = 'id';
    protected $attributes = [
        'judul',
        'deskripsi',
            'gambar',
            'harga',
            'stok'
    ];
    protected $fillable = [
        'judul',
        'deskripsi',
            'gambar',
            'harga',
            'stok'
    ];
}
