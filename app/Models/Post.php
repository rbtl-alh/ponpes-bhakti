<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        // $query->when($filters['category'] ?? false, function($query, $category){
        //     return  $query->whereHas('category', function($query) use ($category){
        //         $query->where('slug', $category);
        //     });
        // });
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
        });

    }

    // public function category(){
    //     return $this->belongsTo(PostCategory::class);
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
