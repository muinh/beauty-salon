<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_material')->insert([
            'product_id' => 1,
            'material_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 1,
            'material_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 1,
            'material_id' => 3,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 2,
            'material_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 2,
            'material_id' => 4,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 2,
            'material_id' => 5,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 3,
            'material_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 3,
            'material_id' => 3,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 3,
            'material_id' => 5,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 4,
            'material_id' => 3,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 4,
            'material_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 4,
            'material_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('product_material')->insert([
            'product_id' => 4,
            'material_id' => 4,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}




