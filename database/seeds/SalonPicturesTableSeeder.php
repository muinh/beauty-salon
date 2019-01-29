<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalonPicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('salon_pictures')->insert([
            'name' => 'Veneziano Mentuccia - Eros Dettagli Uomo (AN)',
            'images' => '["salon-pictures\/November2018\/jUpHCmBiOJG5Jc081NXo.jpg","salon-pictures\/November2018\/l0FHau1CEoXJoYCNydp8.jpg","salon-pictures\/November2018\/s0ItulV7vYyQOnG8iHwE.jpg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_pictures')->insert([
            'name' => 'Brian & Berry - Milano',
            'images' => '["salon-pictures\/November2018\/Jl7xPzsMYefbBGqM09W8.jpg","salon-pictures\/November2018\/4dpsiUcpFwPLEcxXn2kt.jpg","salon-pictures\/November2018\/4the5GggzwEO67slnUfG.jpg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_pictures')->insert([
            'name' => 'Avi Ohana - Israel (Yaniv Shushan)',
            'images' => '["salon-pictures\/November2018\/1WQoLxCr6THhgpyvmE03.jpg","salon-pictures\/November2018\/dtqSz7VarkrLSyXyK4VL.jpg","salon-pictures\/November2018\/x56JnQgeu685MPtQaMfD.jpg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_pictures')->insert([
            'name' => 'Kreatos Shilde - Gamma Benelux',
            'images' => '["salon-pictures\/November2018\/1BcDURgJcdTGssFVOZYp.jpg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_pictures')->insert([
            'name' => 'Ester Van Gorp - Gamma Benelux',
            'images' => '[]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
