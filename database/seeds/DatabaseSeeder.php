<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(Item_typesTableSeeder::class);
        $this->call(Gender_typesTableSeeder::class);
        $this->call(Item_sizesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(Item_imagesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(Crud_activitiesTableSeeder::class);
        $this->call(GuestsTableSeeder::class);
        $this->call(DeliversTableSeeder::class);
        $this->call(Deliver_pricesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(Pick_itemsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(Shop_brandsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(Province_crud_logsTableSeeder::class);
        $this->call(City_crud_logsTableSeeder::class);
        $this->call(Supplier_crud_logsTableSeeder::class);
        $this->call(Deliver_crud_logsTableSeeder::class);
        $this->call(Order_crud_logsTableSeeder::class);
        $this->call(Item_crud_logsTableSeeder::class);
    }
}
