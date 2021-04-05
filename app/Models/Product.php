<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Mockery\Exception;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
    ];


    protected $with = ['images'];


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
     * @param Product $product
     * @return Product
     */
    public static function validateProduct(Request $request, Product $product): Product
    {
        $validated = $request->validate([
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'description' => 'required|min:3|string',
            'description_ar' => 'required|min:3|string',
            'points' =>'required|min:3|string',
            'points_ar' =>'required|min:3|string',
            'features' => 'required|min:3|string',
            'features_ar' => 'required|min:3|string',
            'image_url'  => 'required|min:3|url',
            'category_id' => 'required|integer|exists:categories,id'
        ]);
        
    
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
        $product['category_id'] = $validated['category_id'];

        $product->save();
        return $product;

    }
    
    /**
     * Returns the images of this product
     *
     * @return Product
     */
    public function getImages()
    {
//        return $this->load
    }
}
