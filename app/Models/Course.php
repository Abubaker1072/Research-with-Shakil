<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'rating',
        'reviews_count',
        'duration',
        'lectures_count',
        'level',
        'price',
        'category',
        'description',
        'udemy_url',
        'is_featured',
    ];

    protected $casts = [
        'rating' => 'float',
        'price' => 'float',
        'is_featured' => 'boolean',
    ];
}
