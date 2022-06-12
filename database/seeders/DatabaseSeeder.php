<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Iten;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            BulkSeeder::class,
            CategorySeeder::class,
            CustomerSeeder::class,
            ProductSeeder::class,
            StockLocationSeeder::class,
            UserSeeder::class,
            Type_PaymentSeeder::class,
            Order::class,
            Order_Iten::class


        ]);
    }
}
