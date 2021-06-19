<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_url',
        'video_url',
        'title',
        'title_ar',
        'description',
        'description_ar',
    ];
}
