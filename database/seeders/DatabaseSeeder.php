<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ShopSeeder::class);
        \App\Models\Product::factory(50)->create();
        \App\Models\Ad::factory(5)->create();
        $this->call(ImageSeeder::class);
        $this->call(ProductHaveImageSeeder::class);
        \App\Models\ProductHaveImage::factory(5)->create();
    }
}
