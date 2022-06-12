<?php

namespace Database\Seeders;

use App\Models\Order_Iten;
use Illuminate\Database\Seeder;

class Order_ItenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_Iten::create([
            'seq'=>1,
            'order_id'=>1, // foreign key
            'product_id'=>1, // foreign key
            



        ]);

        Order_Iten::create([
            'seq'=>2,
            'order_id'=>2, // foreign key
            'product_id'=>2, // foreign key
            



        ]);
    }
}
