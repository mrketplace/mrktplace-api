<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $test_pass = '###@@@0110---///';
        DB::table('users')->insert([
            [ // Dev
                'firstname' => "Alexandre",
                'lastname' => "TAHI",
                'password' => bcrypt($test_pass),
                'tel' => '+33695183535',
                'gender' => 'M',
                'role_id' => Role::where(['name' => 'Dev'])->first()->id,
                'address' => '4 Square de Bosnie, 35200, Rennes, France',
                'email' => 'alexandretahi7@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [ // Test Seller
                'firstname' => "Yann-David",
                'lastname' => "DA",
                'password' => bcrypt($test_pass),
                'tel' => '+33695183535',
                'gender' => 'M',
                'role_id' => Role::where(['name' => 'Seller'])->first()->id,
                'address' => "Abidjan, Côte d'Ivoire",
                'email' => 'yanndavidda@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [ // Test Seller
                'firstname' => "Sarah",
                'lastname' => "TRAZO",
                'password' => bcrypt($test_pass),
                'tel' => '+33695183535',
                'gender' => 'F',
                'role_id' => Role::where(['name' => 'Seller'])->first()->id,
                'address' => "Abidjan, Côte d'Ivoire",
                'email' => 'sarahtrazo@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [ // Test Customer
                'firstname' => "Test",
                'lastname' => "CUSTOMER",
                'password' => bcrypt($test_pass),
                'tel' => '+33695183535',
                'gender' => 'M',
                'role_id' => Role::where(['name' => 'Customer'])->first()->id,
                'address' => '4 Square de Bosnie, 35200, Rennes, France',
                'email' => 'testcustomer@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
