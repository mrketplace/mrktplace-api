<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderContainsProduct extends Model
{
    use HasFactory;

    /**
     * Get the associated order.
     */
    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
    /**
     * Get the associated product.
     */
    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
