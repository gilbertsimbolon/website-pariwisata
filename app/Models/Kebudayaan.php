<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kebudayaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_budaya',
        'keterangan',
        'gambar',
    ];
}
