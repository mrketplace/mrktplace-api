<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductHaveImage>
 */
class ProductHaveImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product_ids = Product::all(['id'])->toArray();
        $image_ids = Image::all(['id'])->toArray();
        return [
            'product_id' => array_rand($product_ids) + 1,
            'image_id' => array_rand($image_ids) + 1,
        ];
    }
}
