<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'title' => 'MG Bross',
            'url' => 'www.mgbross.com',
            'logo_id' => '',
            'color' => '#222222',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('brands')->insert([
            'title' => 'Gamma State of the Art',
            'url' => 'www.gamma-state-of-the-art.com',
            'logo_id' => '',
            'color' => '#a7a9ac',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('brands')->insert([
            'title' => 'Gamma Store',
            'url' => 'www.gammastore.com',
            'logo_id' => '',
            'color' => '#d10a10',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('brands')->insert([
            'title' => 'Spa Logic',
            'url' => 'www.gamma-spalogic.net',
            'logo_id' => '',
            'color' => '#3c97ce',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
