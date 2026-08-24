<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'title',
        'institution',
        'icon',
        'icon_color',
        'sort_order',
    ];
}
