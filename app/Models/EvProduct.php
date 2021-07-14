<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EvProduct extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $casts = [
        'points' => 'array',
        'points_ar' => 'array',
        'images' => 'array'
    ];


    /**
     * validates product information
     *
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'description' => 'required|min:3|string',
            'description_ar' => 'required|min:3|string',
            'highlights' => 'required|min:3|string',
            'highlights_ar' => 'required|min:3|string',
            'points' =>'required|array|min:1',
            'points.*' =>'required|string|min:3',
            'points_ar' =>'required|array|min:1',
            'points_ar.*' =>'required|string|min:3',
            'images'  => 'required|array|min:1',
            'images.*'  => 'required|url'

        ]);

       }
}
