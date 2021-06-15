<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Service extends Model
{

    use HasFactory;

    protected $guarded = [];


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
            'image_url'  => 'required|url'

        ]);
    }
}
