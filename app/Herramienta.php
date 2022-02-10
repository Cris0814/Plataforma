<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $table = 'herramientas';
    
    protected $fillable = [
        'nom_herra',
        'tipo_licencia',
        'funciones',
        'interaccion',
        'diseño',
        'usabilidad',
        'documentacion',
        'actualizaciones',
        'porcentaje_aprove',
        'porcentaje_aproba',
        
    ];
}
