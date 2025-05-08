<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinasiPopuler extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tempat',
        'lokasi',
        'gambar'
    ];
}
