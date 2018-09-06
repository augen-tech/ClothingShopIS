<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Shop_brandsTableSeeder extends Seeder
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
            DB::table('shop_brands')->insert([    
                'shop_id' => "1",            
                'name' => $faker->company,
                'city_id' => rand(0,9),   
                'address' => $faker->address, 
            ]);
        }
    }
}
