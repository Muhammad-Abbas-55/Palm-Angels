<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'images',
        'current_price',
        'original_price',
        'discount',
        'colors',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
