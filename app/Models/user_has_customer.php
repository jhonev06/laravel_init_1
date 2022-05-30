<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Has_Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'customers_id'
        
    ];


    protected $table = 'user_has_customers';
    // chaves estrangeiras, como fzr?
   
}