<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'link',
        'link_text',
        'image',
    ];
    use HasFactory;
}
