<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Bulk;
use App\Models\Category;
use App\Models\Stock_Location;
use App\Models\User;
use App\Models\Type_Payment;
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
            OrderSeeder::class,
            Order_ItenSeeder::class


        ]);
    }
}
