<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('news')->insert([
            'name' => 'Salon International 2018 London',
            'content' => 'Gamma & Bross welcomes all beauty professionals to visit its booth G150 - G160 at Salon International, taking place October 13th-15th 2018 at ExCeL in London. The 2018 Edition of the most important Event the U.K. beauty industry appeals more than 48.000 visitors. 
            GAMMA & BROSS takes part to the exclusive Exhibition in cooperation with its official U.K. distributor Aston & Fincher, presenting the high-end Echoes Collection, as well as new products from the more affordable GammaStore salon furniture range. Come visit us!',
            'mainImage' => 'news/November2018/6JajqDSJ3pIc7vz8gesb.png',
            'images' => '["news\/November2018\/sImZoa0yQkLkCgQ0Iucc.png","news\/November2018\/5x1RLkLtQ2SYEueoAxHW.jpg","news\/November2018\/IQQWJ7SzGtau9eV14DgD.jpg","news\/November2018\/ygb3bSOpHsX3gfnISkH1.jpg"]',
            'news_category_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('news')->insert([
            'name' => 'Grand Opening GAMMA & BROSS Düsseldorf Showroom',
            'content' => 'Gamma & Bross is glad to announce the opening of its new Flagship Showroom in Halskestraße, 46, 40880 Ratingen. The new showroom is equipped with all the latest salon furniture collections, as well as the best sellers, who made Gamma & Bross leader in the world of hairdressing furnishings. 
            All clients, distributors and industry friends are welcomed to the Grand Opening on September 30th. The Open House event will take place from 10 am to 6 pm. Gamma & Bross Deutschland is looking forward to seeing you!',
            'mainImage' => 'news/November2018/6JajqDSJ3pIc7vz8gesb.png',
            'images' => '["news\/November2018\/sImZoa0yQkLkCgQ0Iucc.png","news\/November2018\/5x1RLkLtQ2SYEueoAxHW.jpg","news\/November2018\/IQQWJ7SzGtau9eV14DgD.jpg","news\/November2018\/ygb3bSOpHsX3gfnISkH1.jpg"]',
            'news_category_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('news')->insert([
            'name' => 'MONDIAL COIFFURE BEAUTÈ 2018 Paris - France',
            'content' => 'Gamma & Bross took part to MCB 2018 in Paris, the most relevant Beauty Show in France, where it announced its new collaboration with L\'Oréal Professionnel for the supply of Salon Emotion furniture program. The company presented on its stand the new Polaris Collection. On the booth, new products from the GAMMASTORE CATALOG, the affordable beauty salon furniture range were introduced, and visitors could also view the Dressing Beauty Collection by Aldo Coppola.',
            'mainImage' => 'news/November2018/6JajqDSJ3pIc7vz8gesb.png',
            'images' => '["news\/November2018\/sImZoa0yQkLkCgQ0Iucc.png","news\/November2018\/5x1RLkLtQ2SYEueoAxHW.jpg","news\/November2018\/IQQWJ7SzGtau9eV14DgD.jpg","news\/November2018\/ygb3bSOpHsX3gfnISkH1.jpg"]',
            'news_category_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('news')->insert([
            'name' => 'Cosmoprof 2018 - Dressing Beauty by Aldo Coppola',
            'content' => 'Gamma & Bross took part to MCB 2018 in Paris, the most relevant Beauty Show in France, where it announced its new collaboration with L\'Oréal Professionnel for the supply of Salon Emotion furniture program. The company presented on its stand the new Polaris Collection. On the booth, new products from the GAMMASTORE CATALOG, the affordable beauty salon furniture range were introduced, and visitors could also view the Dressing Beauty Collection by Aldo Coppola.',
            'mainImage' => 'news/November2018/6JajqDSJ3pIc7vz8gesb.png',
            'images' => '["news\/November2018\/sImZoa0yQkLkCgQ0Iucc.png","news\/November2018\/5x1RLkLtQ2SYEueoAxHW.jpg","news\/November2018\/IQQWJ7SzGtau9eV14DgD.jpg","news\/November2018\/ygb3bSOpHsX3gfnISkH1.jpg"]',
            'news_category_id' => 2,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
