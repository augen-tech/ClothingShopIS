<?php

use Illuminate\Database\Seeder;

class Item_sizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('item_sizes')->insert([ 
            'size' => "S", 
        ]);
        DB::table('item_sizes')->insert([ 
            'size' => "M", 
        ]);
        DB::table('item_sizes')->insert([ 
            'size' => "L", 
        ]);
        DB::table('item_sizes')->insert([ 
            'size' => "XL", 
        ]);
        DB::table('item_sizes')->insert([ 
            'size' => "XXL", 
        ]);
    }
}
