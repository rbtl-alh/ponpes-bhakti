<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_categories';
    protected $fillable = [
        'nama',
        'slug',
    ];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id');
    }
}
