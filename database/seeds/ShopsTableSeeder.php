<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        DB::table('shops')->insert([                
            'name' => $faker->company,
            'city_id' => rand(0,9),   
            'address' => $faker->address,
            'image' => "image_source",              
        ]);
    }
}
