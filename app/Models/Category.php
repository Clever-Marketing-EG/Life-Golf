<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_ar',
        'image_url'
    ];

    /**
     * Relation to subcategories
     *
     * @return HasMany
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
    /**
     * Relation to subcategories
     *
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
