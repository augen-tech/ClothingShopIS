<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SuppliersTableSeeder extends Seeder
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
            DB::table('suppliers')->insert([                
                'name' => $faker->companySuffix,
                'description' => $faker->sentence,
                'phone_number' => $faker->phoneNumber,         
                'address' => $faker->address,
                'city_id' => rand(0,9),        
            ]);
        }
    }
}
