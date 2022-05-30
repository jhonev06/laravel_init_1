<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', // auto incrementa?
        'name',      
        
        
       
                
    ];

    protected $table = 'type_payments';
    
}
