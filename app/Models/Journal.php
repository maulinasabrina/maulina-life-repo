<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
     protected $fillable = [
        'title', 'slug', 'date', 'category', 'excerpt', 'content', 'image_url'
    ];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = $post->slug ?? Str::slug($post->title);
        });
    }
}
