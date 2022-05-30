<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Iten extends Model
{
    use HasFactory;

    protected $fillable = [
        'seq',
        'orders_id',// foreign key
        'product_id',// foreign key
        'qtd',
        'value',
        'discount',
        'perc_discount'
        
    ];

    protected $table = 'orders_itens';
    protected $keyType = 'integer';
    protected $primaryKey = 'seq';
    public $incrementing = false;

}
