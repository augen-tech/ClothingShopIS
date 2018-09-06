<?php

use Illuminate\Database\Seeder;

class Crud_activitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('crud_activities')->insert([ 
            'action' => "Create", 
        ]);
        DB::table('crud_activities')->insert([ 
            'action' => "Update", 
        ]);
        DB::table('crud_activities')->insert([ 
            'action' => "Delete", 
        ]);
    }
}
