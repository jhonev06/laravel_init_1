<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
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
// codigo abaixo não precisava pq faz automatico
// rafael que não precisa fazer, olhando no olho, alcolizado
    protected $table = 'Customer';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = false;
}

