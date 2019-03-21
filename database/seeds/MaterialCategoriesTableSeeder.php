<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_categories')->insert([
            'name' => 'Veneer',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('material_categories')->insert([
            'name' => 'Prefinished Melamine Cat.2',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('material_categories')->insert([
            'name' => 'Prefinished Melamine Silver',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
