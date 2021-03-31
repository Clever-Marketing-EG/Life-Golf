<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ArticleCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_ar',
        'image_url'
    ];
    /**
     * Relation to articles
     *
     * @return HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
