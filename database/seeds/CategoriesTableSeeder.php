<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'title' => 'Shampoo Bowls',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Styling Salon Chairs',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Barber Chairs',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Island Stations',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Styling Stations',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Reception Desks',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Waiting Area Seating',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Retail Displays',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Manicure Tables',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Beauty Furniture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Trolleys',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Beauty Salon Stools',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Design Accessories',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Hood Dryers',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Posters',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Pedicure Spa Chairs',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
