<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('brands')->insert([
            'title' => 'MG Bross',
            'url' => 'www.mgbross.com',
            'bwImage' => 'brands/November2018/1HxlHVDeQ3yjdUMKuc7G.png',
            'image' => 'brands/November2018/y9NS7YBwpT3OICgpWys0.png',
            'color' => '#222222',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('brands')->insert([
            'title' => 'Gamma State of the Art',
            'url' => 'www.gamma-state-of-the-art.com',
            'bwImage' => 'brands/November2018/3pnhIUhkCxKLHeLCynHt.png',
            'image' => 'brands/November2018/dzNiwUe70Hou6VlT2HyT.png',
            'color' => '#a7a9ac',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('brands')->insert([
            'title' => 'Gamma Store',
            'url' => 'www.gammastore.com',
            'bwImage' => 'brands/November2018/QKa4V2KTPFPTappTWwVX.png',
            'image' => 'brands/November2018/7HmAlquurpKKmFO9Im0N.png',
            'color' => '#d10a10',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('brands')->insert([
            'title' => 'Spa Logic',
            'url' => 'www.gamma-spalogic.net',
            'bwImage' => 'brands/November2018/s3u4OkU4QMJc8NE3IcV3.png',
            'image' => 'brands/November2018/VXAdW8GADKTcHPNzVWj8.png',
            'color' => '#3c97ce',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
