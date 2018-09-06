<?php

use Illuminate\Database\Seeder;

class Item_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('item_types')->insert([ 
            'name' => "Jeans",
            'description' => "description item" 
        ]);

        DB::table('item_types')->insert([ 
            'name' => "T-Shirt",
            'description' => "description item" 
        ]);

        DB::table('item_types')->insert([ 
            'name' => "Shirt",
            'description' => "description item" 
        ]);

        DB::table('item_types')->insert([ 
            'name' => "Skirt",
            'description' => "description item" 
        ]);

        DB::table('item_types')->insert([ 
            'name' => "Dress",
            'description' => "description item" 
        ]);
    }
}
