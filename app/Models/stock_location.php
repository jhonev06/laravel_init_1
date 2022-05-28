<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_Location extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'description'
        
    ];
// fugindo do padrao, não precisava fazer essa abaixo

    protected $table = 'stocks_locations';
   
}
