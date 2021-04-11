<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Reflexões',
            'color' => '#ddd',
            'type' => 'post',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Podcast',
            'color' => '#ddd',
            'type' => 'post',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Eletrônicos',
            'color' => '#fff',
            'type' => 'product',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Terror',
            'color' => '#000',
            'type' => 'book',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Romance',
            'color' => '#000',
            'type' => 'book',
        ]);
    }
}
