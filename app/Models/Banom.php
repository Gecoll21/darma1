<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banom extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
    ];
}