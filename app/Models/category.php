<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'categories_id'
        
    ];

    protected $table = 'categories';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
