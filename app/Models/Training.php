<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'icon',
        'duration_badge',
        'type_badge',
        'badge_color',
        'badge_bg',
        'short_description',
        'modules',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'modules' => 'array',
        'is_active' => 'boolean',
    ];
}
