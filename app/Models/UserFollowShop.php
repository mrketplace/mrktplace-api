<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserFollowShop extends Model
{
    use HasFactory;

    /**
     * Get the associated user.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    /**
     * Get the associated shop.
     */
    public function shop(): HasOne
    {
        return $this->hasOne(Shop::class);
    }

    /**
     * Get with all relationships.
     */
    public function withAll(): UserFollowShop
    {
        return $this->with(['user', 'shop'])->first();
    }
}
