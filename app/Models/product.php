<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'color',
        'qtd',
        'height',
        'width',
        'depth',
        'category_id',// CHAVE ESTRAGEIRA?
        'active', // ICONE BRANCO, O QUE SIGNIGICA?
        'bulk_slug'// CHAVE ESTRANGEIRA?

        
    ];
// codigo abaixo não precisava pq faz automatico, id...
// rafael diz que não precisa fazer, qnd estava saindo da casa dele..
// ele alcolizado me disse isso
    protected $table = 'products';
    
}
