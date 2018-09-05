<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
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
            DB::table('admins')->insert([                
                'username' => $faker->userName,
                'password' => $faker->password,
                'image_source_address' => $faker->text($maxNbChars = 190)                         
            ]);
        }
    }
}
