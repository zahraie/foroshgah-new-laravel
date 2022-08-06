<?php

namespace App\Models\content;

use App\Models\Content\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function sluggable(): array
    {
        return[
            'slug' =>[
                'source' => 'title'
            ]
        ];
    }

    protected $casts = ['image' => 'array'];

    protected $fillable = ['title', 'summary', 'slug', 'image', 'body', 'tags', 'published_at', 'author_id', 'category_id', 'commentable'];

    public function postCategory(){
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
