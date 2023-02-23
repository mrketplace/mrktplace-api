<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartContainsProduct extends Model
{
    use HasFactory;

    /**
     * Get the associated cart.
     */
    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }

    /**
     * Get the associated product.
     */
    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
