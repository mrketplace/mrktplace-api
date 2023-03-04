<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductHaveImage extends Model
{
    use HasFactory;

    /**
     * Get the associated product.
     */
    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    /**
     * Get the associated image.
     */
    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }

    /**
     * Get with all relationships.
     */
    public function withAll(): ProductHaveImage
    {
        return ProductHaveImage::with(['product', 'image'])->find($this->id);
    }
}
