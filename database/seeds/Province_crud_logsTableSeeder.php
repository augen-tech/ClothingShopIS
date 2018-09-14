<?php

use Illuminate\Database\Seeder;

class Province_crud_logsTableSeeder extends Seeder
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
            DB::table('province_crud_logs')->insert([                
                'province_id' => rand(0,9),
                'admin_id' => rand(0,9),
                'crud_activity_id' => rand(0,2), 
                'field_name' => "Province",       
                'table_id' => "0", 
            ]);
        }
    }
}
