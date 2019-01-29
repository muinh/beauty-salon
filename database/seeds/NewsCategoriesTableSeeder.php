<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_categories')->insert([
            'name' => 'Exhibitions',
            'slug' => 'exhibitions',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('news_categories')->insert([
            'name' => 'Events',
            'slug' => 'events',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
