<?php

use Illuminate\Database\Seeder;

class HomeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_categories')->insert([
            'name' => 'top-page',
        ]);
        DB::table('home_categories')->insert([
            'name' => 'products-page',
        ]);
        DB::table('home_categories')->insert([
            'name' => 'news-page',
        ]);
        DB::table('home_categories')->insert([
            'name' => 'about-us',
        ]);
        DB::table('home_categories')->insert([
            'name' => 'recruit',
        ]);
        DB::table('home_categories')->insert([
            'name' => 'workplace',
        ]);
        DB::table('home_categories')->insert([
            'name' => 'customer',
        ]);
    }
}
