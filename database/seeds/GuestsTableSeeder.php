<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuestsTableSeeder extends Seeder
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
        foreach(range(0,9) as $index){
            DB::table('guests')->insert([                
                'password' => $faker->password,
                'email' => $faker->email,
                'name' => $faker->name,         
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address, 
                'city_id' => rand(0,9), 
                'image_source_address' => "image source address",        
            ]);
        }
    }
}
