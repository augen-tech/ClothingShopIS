<?php

use Illuminate\Database\Seeder;

class Item_imagesTableSeeder extends Seeder
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
            DB::table('item_images')->insert([  
                'item_id' => rand(0,9),
                'image_id' => rand(0,9),       
            ]);
        }
    }
}
