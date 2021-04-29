<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'user 1',
            'email'    => 'user1@abc.com',
            'password' => Hash::make('123123'),
            'is_admin' => false,
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name'       => 'admin',
            'email'      => 'admin@abc.com',
            'password'   => Hash::make('123123'),
            'is_admin'   => true,
            'created_at' => now()
        ]);
    }
}
