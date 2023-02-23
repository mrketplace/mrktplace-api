<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [ // Dev
                'firstname' => "Alexandre",
                'lastname' => "TAHI",
                'password' => bcrypt('###@@@0110---///'),
                'tel' => '+33695183535',
                'gender' => 'M',
                'role' => 'Admin',
                'address' => '4 Square de Bosnie, 35200, Rennes, France',
                'email' => 'alexandretahi7@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
