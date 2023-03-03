<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            [
                'name' => 'allthingsyouwantshop',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'url' => 'https://www.instagram.com/allthingsyouwantshoppp/',
                'img' => 'https://i.pinimg.com/originals/ce/56/99/ce5699233cbc0f142250b520d967dff7.png',
                'user_id' => User::where(['firstname' => 'Yann-David'])->first()->id,
                'created_at' => now(),
            ],
            [
                'name' => 'allsneakearsyouwantshop',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'url' => 'https://www.instagram.com/allsneakersyouwantshop/',
                'img' => 'https://s3u.tmimgcdn.com/800x0/u8265365/2f29adc716c7d046dcbbfddea061ae45.jpg',
                'user_id' => User::where(['firstname' => 'Yann-David'])->first()->id,
                'created_at' => now(),
            ],
            [
                'name' => 'kirei.look',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'url' => 'https://www.instagram.com/kirei.look/',
                'img' => 'https://i.pinimg.com/736x/d3/9f/fa/d39ffa4c3780140f8a7d69092d8c1a89.jpg',
                'user_id' => User::where(['firstname' => 'Sarah'])->first()->id,
                'created_at' => now(),
            ],
        ]);
    }
}
