<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Darma extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}