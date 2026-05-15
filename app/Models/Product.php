<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'category', 
        'brand', 
        'image', 
        'specifications', 
        'is_active'
    ];

    protected $casts = [
        'specifications' => 'array',
        'is_active' => 'boolean'
    ];
}
