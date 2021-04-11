<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PageSeeder::class,
            CategoriesSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            ProductSeeder::class,
            BookSeeder::class,
        ]);
    }


}
