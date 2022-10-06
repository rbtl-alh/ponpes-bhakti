<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'user_id',
        'kategori_id',
        'url',
        'ket',
    ];

    public function kategori() {
        return $this->belongsTo('App\KategoriGaleri', 'kategori_id');
    }

    public function user() {//user yang menginput data image
        return $this->belongsTo('App\User', 'user_id');
    }
}
