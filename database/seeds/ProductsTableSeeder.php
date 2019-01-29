<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Beauty Flower',
            'code' => 'GCOP030LA',
            'main_image' => 'products/November2018/nOvUAePKuvNHm9wYBul7.jpeg',
            'features' => 'Shampoo Station with full body and leg raising system. In Red, Grey and Black versions. White bowl.',
            'category_id' => 1,
            'line_id' => 1,
            'designer_id' => 7,
            'brand_id' => 1,
            'images' => '["products\/November2018\/oSsaSBURS9JhuCbyngjF.jpeg","products\/November2018\/HBJ8aZ1ybtAJ6YKBziaR.jpeg"]',
            'materials' => '',
            'dimensions_inch' => '67"L x 41"D x 53"H',
            'dimensions_cm' => '168cm L x 103cm D x 132cm H',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('products')->insert([
            'name' => 'Celebrity SOFA basic',
            'code' => 'CCE022LAS',
            'main_image' => 'products/November2018/nOvUAePKuvNHm9wYBul7.jpeg',
            'features' => 'Shampoo unit for 2, 3 or 4 persons. The sliding and tilting system the bowl, in white or colored ceramic with fittings, can be adjusted for the maximum comfort of the client as well as for the worker. Made in Italy. Optional massage can be added with an upcharge.',
            'category_id' => 1,
            'line_id' => 2,
            'designer_id' => 4,
            'brand_id' => 2,
            'images' => '["products\/November2018\/oSsaSBURS9JhuCbyngjF.jpeg","products\/November2018\/HBJ8aZ1ybtAJ6YKBziaR.jpeg"]',
            'materials' => '',
            'dimensions_inch' => '67"L x 41"D x 53"H',
            'dimensions_cm' => '168cm L x 103cm D x 132cm H',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('products')->insert([
            'name' => '1967',
            'code' => 'GC19670PO',
            'main_image' => 'products/November2018/nOvUAePKuvNHm9wYBul7.jpeg',
            'features' => 'n white or colored ceramic with fittings, can be adjusted for the maximum comfort of the client as well as for the worker. Made in Italy. Optional massage can be added with an upcharge.',
            'category_id' => 1,
            'line_id' => 2,
            'designer_id' => 4,
            'brand_id' => 2,
            'images' => '["products\/November2018\/oSsaSBURS9JhuCbyngjF.jpeg","products\/November2018\/HBJ8aZ1ybtAJ6YKBziaR.jpeg"]',
            'materials' => '',
            'dimensions_inch' => '67"L x 41"D x 53"H',
            'dimensions_cm' => '168cm L x 103cm D x 132cm H',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('products')->insert([
            'name' => 'Some test product',
            'code' => 'GC17670PO',
            'main_image' => 'products/November2018/nOvUAePKuvNHm9wYBul7.jpeg',
            'features' => 'n white or colored ceramic with fittings, can be adjusted for the maximum comfort of the client as well as for the worker. Made in Italy. Optional massage can be added with an upcharge.',
            'category_id' => 3,
            'line_id' => 3,
            'designer_id' => 4,
            'brand_id' => 2,
            'images' => '["products\/November2018\/oSsaSBURS9JhuCbyngjF.jpeg","products\/November2018\/HBJ8aZ1ybtAJ6YKBziaR.jpeg"]',
            'materials' => '',
            'dimensions_inch' => '67"L x 41"D x 53"H',
            'dimensions_cm' => '168cm L x 103cm D x 132cm H',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
