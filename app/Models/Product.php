<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'deleted_at',
    ];

    /**
     * Get the shop that owns the product.
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * Get the image of the product.
     */
    public function images(): HasManyThrough
    {
        return $this->hasManyThrough(Image::class, ProductHaveImage::class, 'product_id', 'id', 'id', 'image_id');
    }

    /**
     * Get with all relationships.
     */
    public function withAll(): Product
    {
        return Product::with(['shop', 'images'])->find($this->id);
    }
}
