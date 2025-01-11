<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    // Define any relationships if necessary
    // For example, if a category has many products:
    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
}
