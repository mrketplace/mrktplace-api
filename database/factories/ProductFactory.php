<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shop_ids = Shop::all(['id'])->toArray();
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'img' => 'http://127.0.0.1:8000/img/products/product_template.jpg',
            'shop_id' => array_rand($shop_ids) + 1,
        ];
    }
}
