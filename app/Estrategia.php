<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estrategia extends Model
{
    protected $table = 'estrategias';
    
    protected $fillable = [
        'nom_estra',
        'estra_apren_interactivo',
        'estra_apren_colabo',
        'estra_autoapren',
        'estra_didactica',
        'compete_evaluar',
        'estra_evaluacion',
        'valoracion_estra',
    ];
}
