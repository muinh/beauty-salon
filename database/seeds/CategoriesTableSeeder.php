<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoriesTableSeeder
 */
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Shampoo Bowls',
            'slug' => 'shampoo-bowls',
            'image' => 'categories/November2018/xKwD5PxrMPqYz6q32WUh.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Styling Salon Chairs',
            'slug' => 'styling-salon-chairs',
            'image' => 'categories/November2018/6Z3UTFkpykB2Ne3TKH3z.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Barber Chairs',
            'slug' => 'barber-chairs',
            'image' => 'categories/November2018/8Glv8iuEKAV7Ue68dPJ0.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Island Stations',
            'slug' => 'island-stations',
            'image' => 'categories/November2018/xKwD5PxrMPqYz6q32WUh.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Styling Stations',
            'slug' => 'salon-styling-stations',
            'image' => 'categories/November2018/8Glv8iuEKAV7Ue68dPJ0.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Reception Desks',
            'slug' => 'salon-reception-desks',
            'image' => 'categories/November2018/6Z3UTFkpykB2Ne3TKH3z.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Waiting Area Seating',
            'slug' => 'waiting-area-seating',
            'image' => 'categories/November2018/8Glv8iuEKAV7Ue68dPJ0.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Retail Displays',
            'slug' => 'salon-retail-displays',
            'image' => 'categories/November2018/6Z3UTFkpykB2Ne3TKH3z.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Manicure Tables',
            'slug' => 'manicure-tables',
            'image' => 'categories/November2018/xKwD5PxrMPqYz6q32WUh.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Beauty Furniture',
            'slug' => 'beauty-furniture',
            'image' => 'categories/November2018/8Glv8iuEKAV7Ue68dPJ0.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Trolleys',
            'slug' => 'salon-trolleys',
            'image' => 'categories/November2018/6Z3UTFkpykB2Ne3TKH3z.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Beauty Salon Stools',
            'slug' => 'beauty-salon-stools',
            'image' => 'categories/November2018/xKwD5PxrMPqYz6q32WUh.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Design Accessories',
            'slug' => 'salon-design-accessories',
            'image' => 'categories/November2018/8Glv8iuEKAV7Ue68dPJ0.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Hood Dryers',
            'slug' => 'hood-dryers',
            'image' => 'categories/November2018/6Z3UTFkpykB2Ne3TKH3z.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Salon Posters',
            'slug' => 'salon-posters',
            'image' => 'categories/November2018/xKwD5PxrMPqYz6q32WUh.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('categories')->insert([
            'title' => 'Pedicure Spa Chairs',
            'slug' => 'pedicure-spa-chairs',
            'image' => 'categories/November2018/8Glv8iuEKAV7Ue68dPJ0.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
