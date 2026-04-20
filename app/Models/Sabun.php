<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sabun extends Model
{
    protected $table = 'sabun';

    protected $fillable = [
        'nama_sabun',
        'merk',
        'harga',
        'stok',
        'deskripsi'
    ];
}