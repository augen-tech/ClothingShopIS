<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
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
            DB::table('orders')->insert([                
                'guest_id' => rand(0,9),
                'deliver_id' => rand(0,4),
                'shipping_address' => $faker->address,
                'total' => rand(50000,300000),
                'created_order_at' => $faker->dateTime($max = 'now', $timezone = null),
                'status' => rand(0,1),
            ]);
        }
    }
}
