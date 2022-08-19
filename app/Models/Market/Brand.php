<?php

namespace App\Models\Market;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes , Sluggable;

    public function sluggable(): array
    {
        return[
            'slug' =>[
                'source' => 'original_name'
            ]
        ];
    }

    protected $casts = ['logo' => 'array'];


    protected $fillable = ['persian_name', 'original_name', 'slug', 'logo', 'status', 'tags'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
