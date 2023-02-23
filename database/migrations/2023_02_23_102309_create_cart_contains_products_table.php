<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_contains_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts'); // The cart that is contains the product
            $table->foreignId('product_id')->constrained('products'); // The product that is contained in the cart
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_have_carts');
    }
};
