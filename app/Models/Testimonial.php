<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role_or_course',
        'feedback',
        'rating',
        'avatar_initials',
        'is_featured',
    ];

    protected $casts = [
        'rating' => 'float',
        'is_featured' => 'boolean',
    ];
}
