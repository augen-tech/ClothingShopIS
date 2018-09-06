<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProvincesTableSeeder extends Seeder
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
            DB::table('provinces')->insert([                
                'name' => $faker->state,                
            ]);
        }
    }
}
