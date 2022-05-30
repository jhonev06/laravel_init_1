<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_id', // foreing key?
        'stock_location_id', // foreign key?
        'qtd',
        'lote'

    ];
    // fugindo do padrao, não precisava fazer essa abaixo

    protected $table = 'stocks';
    // qual chave primaria usar nessa tabela?
}
