<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DeliversTableSeeder extends Seeder
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
        foreach(range(0,4) as $index){
            DB::table('delivers')->insert([                
                'name' => $faker->companySuffix,
                'description' => $faker->sentence,     
            ]);
        }
    }
}
