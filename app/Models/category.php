<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', // PERGUNTAR RAFAEL SOBRE O VIDEO ( 1.50 video STRING INT)
        'name',
        'categories_id'
        
    ];
// fugindo do padrao, não precisava fazer essa abaixo

    protected $table = 'categories';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
