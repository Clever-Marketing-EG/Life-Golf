<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relation to products
     *
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }


    /**
     * relation to categories
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
<<<<<<< HEAD
    
=======


    public static function validate(Request $request): array
    {
        return $request->validate([
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'image_url' => 'required|url',
            'category_id' => 'required|integer|exists:categories,id'
        ]);
    }
>>>>>>> 86cb0642a1d03a6a25f203dc318b8b6107d30064
}
