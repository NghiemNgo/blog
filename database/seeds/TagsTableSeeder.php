<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'category_id' => 1,
            'post_id' => 1,
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'post_id' => 1,
        ]);
    }
}
