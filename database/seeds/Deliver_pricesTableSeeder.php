<?php

use Illuminate\Database\Seeder;

class Deliver_pricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach(range(0,9) as $index){
            DB::table('deliver_prices')->insert([                
                'deliver_id' => rand(0,4),
                'from_city_id' => rand(0,9),
                'to_city_id' => rand(0,9), 
                'price' => rand(20000, 200000),        
            ]);
        }
    }
}
