<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder
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
            DB::table('cities')->insert([
                'province_id' => rand(0,9),    
                'name' => $faker->city, 
            ]);
        }
    }
}
