<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roupas = Category::create([
            'name'=>'roupas',
         ]
         );
         
         Category::create([
            'name'=>'calçados',
         ]
         ); 
         $acessorios = Category::create([
            'name'=>'acessorios',
                    
         ]
         );
         
         Category::create([
            'name'=>'oculos',
            'category_id' => $acessorios->id
         ]
         ); 
         
         Category::create([
            'name'=>'vestido',
            'category_id' => $roupas->id
         ]
         );
                


    }
}
