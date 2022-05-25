<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'category_id'
        
    ];
// fugindo do padrao, não precisava fazer essa abaixo

    protected $table = 'categories';
   
}
