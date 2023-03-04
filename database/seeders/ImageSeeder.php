<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = "http://127.0.0.1:8000/img/products/";
        for ($i = 1; $i < 16; $i++) {
            DB::table('images')->insert([
                'path' => $path . "pt" . $i . ".jpg",
                'created_at' => now(),
            ]);
        }
    }
}
