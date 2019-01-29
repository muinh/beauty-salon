<?php

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
         $this->call(BrandsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(DesignersTableSeeder::class);
         $this->call(LinesTableSeeder::class);
         $this->call(MaterialCategoriesTableSeeder::class);
         $this->call(MaterialsTableSeeder::class);
         $this->call(NewsCategoriesTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(ProductMaterialTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(SalonLayoutsTableSeeder::class);
         $this->call(SalonPicturesTableSeeder::class);
         $this->call(ShowroomsTableSeeder::class);
         $this->call(DealersTableSeeder::class);
         $this->call(SlidersTableSeeder::class);
         $this->call(GeneralInfoEnTableSeeder::class);
    }
}
