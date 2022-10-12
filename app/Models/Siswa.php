<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // use HasFactory;
    protected $table = 'siswa';
    protected $guarded = ['id'];
    // protected $casts = [
    //     'alamat' => 'array'
    // ];

    // public function provinsi() {
    //     return $this->belongsTo('App\Provinsi','id','provinsi_id');
    // }
}
