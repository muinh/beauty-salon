<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name' => 'Bianco 003',
            'image_id' => '',
            'material_category_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materials')->insert([
            'name' => 'F19001',
            'image_id' => '',
            'material_category_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materials')->insert([
            'name' => 'F19002',
            'image_id' => '',
            'material_category_id' => 3,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materials')->insert([
            'name' => 'F37011',
            'image_id' => '',
            'material_category_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materials')->insert([
            'name' => 'Faggio 400',
            'image_id' => '',
            'material_category_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

    }
}
