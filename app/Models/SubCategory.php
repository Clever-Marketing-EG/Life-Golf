<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'content',
        'content_ar',
        'image_url',
        'category_id'
    ];

    /**
     * Relation to products
     *
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
