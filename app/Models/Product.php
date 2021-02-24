<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
     * Returns the images of this product
     *
     * @return Product
     */
    public function getImages()
    {
//        return $this->load
    }
}
