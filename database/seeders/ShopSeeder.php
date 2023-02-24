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
                'url' => 'https://www.instagram.com/allthingsyouwantshoppp/',
                'user_id' => User::where(['firstname' => 'Yann-David'])->first()->id,
                'created_at' => now(),
            ],
            [
                'name' => 'allsneakearsyouwantshop',
                'url' => 'https://www.instagram.com/allsneakersyouwantshop/',
                'user_id' => User::where(['firstname' => 'Yann-David'])->first()->id,
                'created_at' => now(),
            ],
            [
                'name' => 'kirei.look',
                'url' => 'https://www.instagram.com/kirei.look/',
                'user_id' => User::where(['firstname' => 'Sarah'])->first()->id,
                'created_at' => now(),
            ],
        ]);
    }
}
