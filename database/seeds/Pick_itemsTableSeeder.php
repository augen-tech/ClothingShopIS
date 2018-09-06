<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Pick_itemsTableSeeder extends Seeder
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
            DB::table('pick_items')->insert([                
                'order_id' => rand(0,9),
                'item_id' => rand(0,9),
                'total_item' => rand(1,12),
            ]);
        }
    }
}
