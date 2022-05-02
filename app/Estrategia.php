<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estrategia extends Model
{
    protected $table = 'estrategias';
    
    protected $fillable = [
        'tipo_estra',
        'nom_estra',
        'compete_evaluar',
        'tipo_herra',
        'nom_herra',
          
        'valoracion_estra',
    ];
}
