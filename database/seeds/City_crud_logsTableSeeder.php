<?php

use Illuminate\Database\Seeder;

class City_crud_logsTableSeeder extends Seeder
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
            DB::table('city_crud_logs')->insert([                
                'city_id' => rand(0,9),
                'admin_id' => rand(0,9),
                'crud_activity_id' => rand(0,2), 
                'field_name' => "City",        
            ]);
        }
    }
}
