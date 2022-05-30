<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', // auto incrementa?
        'name',      
        'email',
        'password',
        'type',
        
       
                
    ];

    protected $table = 'users';
    
}


