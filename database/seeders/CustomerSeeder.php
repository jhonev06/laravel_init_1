<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            
            'name'=>'fulano',
            'document'=>'123',
            'email'=>'teste@test.com'

            
         ]
         );

         Customer::create([
            
            'name'=>'cicrano',
            'document'=>'321',
            'email'=>'testeII@teste.com'

            
         ]
         );


    }
}
