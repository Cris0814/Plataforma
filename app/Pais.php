<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {
protected $table = 'paises';   

protected $fillable = ['id','nombre' ];
    public function get(){
        $paises = Paises::get();
        
        $paisesArray [''] = 'Seleccione un Pais';
        foreach ($paises as $pais){

            $paisesArray[$pais->id] = $pais->nombre;
        }
        return $paisesArray;
    }

    
}