<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'PHP',
        ]);
        DB::table('categories')->insert([
            'name' => 'Java',
        ]);
        DB::table('categories')->insert([
            'name' => 'MySQL',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tester',
        ]);
        DB::table('categories')->insert([
            'name' => 'FrontEnd',
        ]);
        DB::table('categories')->insert([
            'name' => '.Net',
        ]);
        DB::table('categories')->insert([
            'name' => 'Embedded',
        ]);
        DB::table('categories')->insert([
            'name' => 'JavaScript',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fresher',
        ]);
        DB::table('categories')->insert([
            'name' => 'C++',
        ]);
        DB::table('categories')->insert([
            'name' => 'C',
        ]);
        DB::table('categories')->insert([
            'name' => 'iOS',
        ]);
        DB::table('categories')->insert([
            'name' => 'Android',
        ]);
        DB::table('categories')->insert([
            'name' => 'Mobile',
        ]);
        DB::table('categories')->insert([
            'name' => 'Game',
        ]);
        DB::table('categories')->insert([
            'name' => 'BrSE',
        ]);
    }
}
