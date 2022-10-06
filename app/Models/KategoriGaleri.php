<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table = 'kategori_galeris';
    protected $fillable = [
        'user_id',            
        'nama_kategori',
    ];
    
    public function user() {//user yang menginput data image
        return $this->belongsTo('App\User', 'user_id');
    }

    public function images(){
    	return $this->hasMany('App\Models\Image', 'kategori_id');
    }

}
