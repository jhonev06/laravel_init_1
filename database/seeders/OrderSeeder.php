<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::UpdateOrcreate([
            
            //'user_id'=> 1, // foreign key
            'date'=>'00/00/2000',
            //'type'=>'S',
            //'status'=>'S',
            //'customer_id'=> 1, // foreign key
            'observation'=>'teste, teste', // null
            //'type_payment_id'=> 1


        ]);

        
    }
}
