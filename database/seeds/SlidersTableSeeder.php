<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/Kmtxg79jT1ztcjEaFLvI.jpeg',
            'is_on_main' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/PKwIGcRbpBB0thKOlT7D.jpeg',
            'is_on_main' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/6IplAbNekdIr3GGr0cIM.jpeg',
            'is_on_main' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/dQMYKl1lDpe1uam19ZNN.png',
            'is_on_main' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/d714u83D9UVTiheVgpQD.jpg',
            'is_on_main' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/UPcI1ox1bNJab9EScBpL.jpg',
            'is_on_main' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('sliders')->insert([
            'image' => 'sliders/November2018/0hkU9QhSQ1kqfslmx1Tg.jpg',
            'is_on_main' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
