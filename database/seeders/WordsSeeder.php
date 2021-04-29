<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert(['category_id' => 1, 'word' => 'indonesia', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'rusia', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'singapore', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'america', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'england', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'taiwan', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'china', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 1, 'word' => 'monako', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'apple', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'avocado', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'banana', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'blueberry', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'coconut', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'grapes', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 2, 'word' => 'lemon', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'mouse', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'octopus', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'rabbit', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'raccoon', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'sheep', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'snake', 'created_at' => now()]);
        DB::table('words')->insert(['category_id' => 3, 'word' => 'tiger', 'created_at' => now()]);
    }
}
