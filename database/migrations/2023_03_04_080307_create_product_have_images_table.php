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
        Schema::create('product_have_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products'); // The product that have the image
            $table->foreignId('image_id')->constrained('images'); // The image of the product
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_have_images');
    }
};
