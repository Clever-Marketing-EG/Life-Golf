<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvService extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'content',
        'content_ar',
        'image_url'
    ];
}
