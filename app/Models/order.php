<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        // Id aqui não definido , alto incrementa?
        'number',
        //'user_id',// foreign key
        'date',
        //'type',
        //'status',
        //'customer_id',// foreign key
        'observation',// null
        //'type_payment_id'// foreign key
        
        
    ];

    protected $table = 'orders';
    

}