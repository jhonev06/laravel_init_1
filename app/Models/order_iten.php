<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Iten extends Model
{
    use HasFactory;

    protected $fillable = [
        //'seq',
        'order_id',// foreign key
        'product_id',// foreign key
        'quantity',
        'value',
       // 'discount',
        //'percent_discount'
        
    ];

    protected $table = 'orders_itens';
   // protected $keyType = 'integer';
   // protected $primaryKey = 'seq';
   // public $incrementing = false;

   public function order()
   {
    return $this->belongsTo(Order::class);
   }

}
