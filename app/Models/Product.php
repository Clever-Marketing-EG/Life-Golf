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


    protected $with = ['images'];

    protected $casts = [
        'points' => 'array',
        'points_ar' => 'array',
        'features' => 'array',
        'features_ar' => 'array'
    ];

    /**
     * Get the images for the product.
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }


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
            'image_url'  => 'required|url',
            'configuration_image_url' => 'url|nullable',
            'sub_category_id' => 'required|integer|exists:sub_categories,id',
            'category_id' => 'required|integer|exists:categories,id'


        ]);

<<<<<<< HEAD

        $product['name'] = $validated['name'];
        $product['name_ar'] = $validated['name_ar'];
        $product['features'] = $validated['features'];
        $product['features_ar'] = $validated['features_ar'];
        $product['description'] = $validated['description'];
        $product['description_ar'] = $validated['description_ar'];

        $pointsArray = explode(',', request('points'));
        $points = '[';
        foreach ($pointsArray as $point) {
            $points .= '"' . $point . '"' . ',';
        }
        $points = rtrim($points, ",");
        $points .= ']';
        $product['points'] = $points;

        $product['name'] = $validated['name'];
        $product['name_ar'] = $validated['name_ar'];
        $product['features'] = $validated['features'];
        $product['features_ar'] = $validated['features_ar'];
        $product['description'] = $validated['description'];
        $product['description_ar'] = $validated['description_ar'];

        $pointsArray = explode(',', request('points_ar'));
        $points = '[';
        foreach ($pointsArray as $point) {
            $points .= '"' . $point . '"' . ',';
        }
        $points = rtrim($points, ",");
        $points .= ']';

        $product['points_ar'] = $points;
        $product['image_url'] = $validated['image_url'];
        $product['configuration_image_url'] = $validated['configuration_image_url'];
        $product['sub_category_id'] = $validated['sub_category_id'];
        $product['category_id'] = $validated['category_id'];


        $product->save();
        return $product;

=======
>>>>>>> 86cb0642a1d03a6a25f203dc318b8b6107d30064
    }


    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
