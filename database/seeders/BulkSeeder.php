<?php

namespace Database\Seeders;

use App\Models\Bulk;
use Illuminate\Database\Seeder;

class BulkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bulk::create([
            'slug'=>'CX',
            'name'=>'Caixa'
         ]
         );
         
         Bulk::create([
            'slug'=>'UN',
            'name'=>'Unidade'
         ]
         );

         Bulk::create([
            'slug'=>'KG',
            'name'=>'Peso'
         ]
         );
        
    }
}
