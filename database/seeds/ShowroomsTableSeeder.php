<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('showrooms')->insert([
            'title' => 'Showroom Headquarters',
            'name' => 'GAMMA & BROSS S.p.A.',
            'contacts' => 'Via Mazzini 62E
                            Castiglione delle Stiviere (MN)
                            Italy 
                            tel. +39.0376.632630
                            fax +39.0376.636683
                            email info@gammabross.com
                            web www.gammabross.com',
            'images' => '["showrooms\/November2018\/fhBrmsGqs51MIJZFrZER.jpg","showrooms\/November2018\/CyFyWc2XiLjWyezlIsJe.jpg","showrooms\/November2018\/3xCX8JOyWZMMku7TcjrK.jpg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('showrooms')->insert([
            'title' => 'Showroom New York - New Opening Fall 2016!',
            'name' => 'GAMMA & BROSS USA INC. ',
            'contacts' => 'GAMMA & BROSS USA INC.
                            68 34th Street, Unit 7
                            Brooklyn NY 11232
                            USA
                            ph. 212 239 6916
                            fax 212 239 6917
                            email info@beautydesign.com
                            web www.beautydesign.com',
            'images' => '["showrooms\/November2018\/qEeKFNRwtGcsjjBucKV5.jpg","showrooms\/November2018\/bRBi6U9rwOBysGbvY4eC.jpg","showrooms\/November2018\/1yQ61AGBySgqAEFpzY02.jpg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
