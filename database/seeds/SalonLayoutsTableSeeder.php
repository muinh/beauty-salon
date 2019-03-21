<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalonLayoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('salon_layouts')->insert([
            'name' => 'Retro Style Salon',
            'description' => 'Italian Style - 30Mq Salon',
            'images' => '["salon-layouts\/November2018\/0fZEqLFcMPxExw1nQbLU.png","salon-layouts\/November2018\/45RM8jCYB8khCoEAHKqZ.png"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_layouts')->insert([
            'name' => 'Love is Red',
            'description' => 'Salon Space - 65mq',
            'images' => '["salon-layouts\/November2018\/q3aVv0zWp7Kvl3m1tLtp.png","salon-layouts\/November2018\/Cyd2slmu9MBefRtEgDuU.png","salon-layouts\/November2018\/mLzxt2GjgmGwUem0zieK.png","salon-layouts\/November2018\/JSxoBBeVDa8GEc6LJWOt.jpeg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_layouts')->insert([
            'name' => 'Man and Woman',
            'description' => 'Salon Space 60mq',
            'images' => '["salon-layouts\/November2018\/2ExHL3oRYsClZFi6znSZ.png","salon-layouts\/November2018\/cOiVf65lLuMVXCp3wquh.jpeg","salon-layouts\/November2018\/8Sq4eEzfFh0qQ1gYTxZY.jpeg","salon-layouts\/November2018\/FKphlTUrSbMDgMbKjFl7.jpeg"]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('salon_layouts')->insert([
            'name' => 'Urban Space',
            'description' => 'Salon 80mq',
            'images' => '[]',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
