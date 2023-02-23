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
        Schema::create('order_contains_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders'); // The order that conatins the product
            $table->foreignId('product_id')->constrained('products'); // The product that is conatined in the order
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_contains_products');
    }
};
