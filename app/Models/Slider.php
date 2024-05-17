<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slider_title',
        'slider_body',
        'slider_link',
        'slider_link_text',
        'slider_image',
        'order',
        'is_active'
    ];
}
