<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'content_ar',
        'type',
        'page'
    ];
}
