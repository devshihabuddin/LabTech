<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([  
            
            [
                'username' => 'admin',
                'email'     => 'admin@gmail.com',
                'phone'     => '01855555076',
                'image'     => 'default.png',
                'password'  => Hash::make('12345678'),
                
            ],
        ]);
    }
}
