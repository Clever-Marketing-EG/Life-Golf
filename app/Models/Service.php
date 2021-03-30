<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_ar',
        'description',
        'description_ar',
        'title1',
        'title1_ar',
        'title2',
        'title2_ar',
        'points',
        'points_ar',
        'points_2',
        'points_2_ar',
        'image_url',
        'image_url1',
        'image_url2',
        // 'descArray1',
        // 'descArray2'
    ];
}
