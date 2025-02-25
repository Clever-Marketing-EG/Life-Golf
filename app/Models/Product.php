<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Mockery\Exception;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $casts = [
        'points' => 'array',
        'points_ar' => 'array',
        'features' => 'array',
        'features_ar' => 'array',
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
            'points' =>'required|array|min:1',
            'points.*' =>'required|string|min:3',
            'points_ar' =>'required|array|min:1',
            'points_ar.*' =>'required|string|min:3',
            'features' => 'required|array|min:1',
            'features.*' => 'required|string|min:3',
            'features_ar' => 'required|array|min:1',
            'features_ar.*' => 'required|string|min:3',
            'images'  => 'required|array|min:1',
            'images.*'  => 'required|url',
            'configuration_image_url' => 'nullable|url',
            'specifications_image_url' => 'required|url',
            'sub_category_id' => 'required|integer|exists:sub_categories,id'
        ]);

    }


    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
