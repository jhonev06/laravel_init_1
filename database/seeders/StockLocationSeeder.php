<?php

namespace Database\Seeders;

use App\Models\Stock_Location;
use Illuminate\Database\Seeder;

class StockLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock_Location::create([
            
            'description'=>'estante 4' 
         ]
         );

         Stock_Location::create([
            
            'description'=>'estante 5' 
         ]
         );
    }
}
