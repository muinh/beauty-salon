<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('dealers')->insert([
            'country_name' => 'africa',
            'name' => 'GAMMA-MGBROSS AFRICA',
            'image' => 'dealers/November2018/zmBXLbt14MuP1mAsdLx0.jpeg',
            'address' => 'Angle Rue Ibnou Katir et Ibnou Habous 18
                            21000 Maarif - Casablanca
                            (Morocco)
                            t+212 (0) 5 22 98 95 21 /2
                            ebellaforme@menara.ma
                            wwww.bellaforme.ma',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.1294736187338!2d-7.6477940487072!3d33.57598745002876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2db6be44f75%3A0x5329ee1048aa45d7!2sBella+Forme!5e0!3m2!1sen!2sit!4v1535114897929',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('dealers')->insert([
            'country_name' => 'france',
            'name' => 'GAMMA-MGBROSS FRANCE',
            'image' => 'dealers/November2018/zmBXLbt14MuP1mAsdLx0.jpeg',
            'address' => 'Angle Rue Ibnou Katir et Ibnou Habous 18
                            21000 Maarif - Casablanca
                            (Morocco)
                            t+212 (0) 5 22 98 95 21 /2
                            ebellaforme@menara.ma
                            wwww.bellaforme.ma',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.359253539305!2d2.4092129515916705!3d48.813206511738976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67301c9cfa41d%3A0x151a3a91c9e26cc8!2sGamma+%26+Bross+France!5e0!3m2!1sen!2sit!4v1534949009413',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('dealers')->insert([
            'country_name' => 'france',
            'name' => 'GAMMA-MGBROSS FRANCE',
            'image' => 'dealers/November2018/zmBXLbt14MuP1mAsdLx0.jpeg',
            'address' => 'Angle Rue Ibnou Katir et Ibnou Habous 18
                            21000 Maarif - Casablanca
                            (Morocco)
                            t+212 (0) 5 22 98 95 21 /2
                            ebellaforme@menara.ma
                            wwww.bellaforme.ma',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.359253539305!2d2.4092129515916705!3d48.813206511738976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67301c9cfa41d%3A0x151a3a91c9e26cc8!2sGamma+%26+Bross+France!5e0!3m2!1sen!2sit!4v1534949009413',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
