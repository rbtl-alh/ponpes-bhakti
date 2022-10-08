<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ustadzah extends Model
{
    protected $table = 'ustadzah';
    protected $fillable = [
        'nama',
        'nip',
        'mapel',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'foto',
    ];
}
