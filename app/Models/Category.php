<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relation to subcategories
     *
     * @return HasMany
     */
    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

    /**
     * Relation to products
     *
     * @return HasManyThrough
     */
    public function products(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, SubCategory::class);
    }

}
