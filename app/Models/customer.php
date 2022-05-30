<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', // auto incrementa?
        'name',
        'price',
        'document',
        'email',
        'postal_code',
        'address',
        'neighborhood',
        'city',
        'number',
        'state' 
                
    ];
// codigo abaixo não precisava pq faz automatico, id...
// rafael diz que não precisa fazer, qnd estava saindo da casa dele..
// ele alcolizado me disse isso
    protected $table = 'customers';
    
}

