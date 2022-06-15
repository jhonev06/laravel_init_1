<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [

                'name' => 'vestido',
                'category_id' => 1, // CHAVE ESTRAGEIRA?                
                'bulk_slug' => 'UN'


            ]
        );

        Product::create(
            [

                'name' => 'camisa',
                'category_id' => 1, // CHAVE ESTRAGEIRA?                
                'bulk_slug' => 'CX'


            ]
        );
    }
}
