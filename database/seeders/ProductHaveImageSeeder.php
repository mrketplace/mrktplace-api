<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductHaveImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $image_ids = Image::all(['id'])->toArray();
        foreach ($products as $product) {
            DB::table('product_have_images')->insert([
                'product_id' => $product->id,
                'image_id' => array_rand($image_ids) + 1,
                'created_at' => now(),
            ]);
        }
    }
}
