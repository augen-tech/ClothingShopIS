<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bank_name = array("Mandiri", "BNI", "BRI", "BCA");
        $faker = Faker::create();
        foreach(range(0,9) as $index){
            DB::table('payments')->insert([                
                'order_id' => rand(0,9),
                'bank_name' => $bank_name[array_rand($bank_name)],
                'nominal' => rand(100000,500000),         
                'date' => $faker->dateTime($max = 'now', $timezone = null),
                'image_source_address' => "imageSourceAddress",        
            ]);
        }
    }
}
