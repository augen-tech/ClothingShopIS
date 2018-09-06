<?php

use Illuminate\Database\Seeder;

class Gender_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gender_types')->insert([ 
            'name' => "Male", 
        ]);
        DB::table('gender_types')->insert([ 
            'name' => "Female", 
        ]);
    }
}
