<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
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
            DB::table('items')->insert([  
                'type_item_id' => rand(0,4),
                'gender_item_id' => rand(0,1),
                'item_size_id' => rand(0,4),
                'color_id' => rand(0,9),
                'supplier_id' =>  rand(0,9),      
                'name' => "item name",
                'description' => "item Description",
                'price' => rand(20000, 200000),
                'stock' => rand(0, 100),
            ]);
        }
    }
}
