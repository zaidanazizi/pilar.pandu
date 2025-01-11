<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'gallery',
        'specifications',
        'category_id',
    ];

    protected $casts = [
        'gallery' => 'array', // Decode JSON ke array
        'specifications' => 'array', // Decode JSON ke array
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
