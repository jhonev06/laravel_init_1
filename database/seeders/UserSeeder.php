<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            
            'name'=>'fulano',
            'email'=>'teste@test.com',               
            'password'=>'0000',
            'type'=>'S',

            
         ]
         );

         User::create([
            
            'name'=>'cicranus',
            'email'=>'testeII@teste.com',               
            'password'=>'0000',
            'type'=>'S',

            
         ]
         );
    }
}
