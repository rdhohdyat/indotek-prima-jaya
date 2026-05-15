<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 
        'slug', 
        'content', 
        'excerpt', 
        'category', 
        'author', 
        'image', 
        'read_time', 
        'is_featured', 
        'published_at'
    ];
}
