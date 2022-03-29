<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model{
    protected $table = 'institucion';
    
    protected $fillable = [
        'nombre',
        'pais',
        'ciudad',
        'tipo',
        
        
    ];
}