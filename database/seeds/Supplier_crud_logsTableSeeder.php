<?php

use Illuminate\Database\Seeder;

class Supplier_crud_logsTableSeeder extends Seeder
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
            DB::table('supplier_crud_logs')->insert([                
                'supplier_id' => rand(0,9),
                'admin_id' => rand(0,9),
                'crud_activity_id' => rand(0,2), 
                'field_name' => "Supplier", 
                'table_id' => "3",        
            ]);
        }
    }
}
