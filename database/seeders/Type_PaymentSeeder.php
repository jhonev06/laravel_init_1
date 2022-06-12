<?php

namespace Database\Seeders;

use App\Models\Type_Payment;
use Illuminate\Database\Seeder;

class Type_PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_Payment::create([
            
            'name'=>'exemplo' 
         ]
         );

         Type_Payment::create([
            
            'name'=>'exemploII' 
         ]
         );
    }
}
