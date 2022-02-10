<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Columna extends Model
{
    protected $table = 'columnas';

    protected $fillable = [
        'nombre',
        'tipo_columnas',
        
        
    ];
}
