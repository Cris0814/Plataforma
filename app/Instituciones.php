<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Instituciones extends Model {
protected $table = 'institucion';   
    public function get(){
        $instituciones = Instituciones::get();
        
        $institucionesArray [''] = 'Seleccione una Institucion';
        foreach ($instituciones as $institucion){

            $institucionesArray[$institucion->id] = $institucion->nombre;
        }
        return $institucionesArray;
    }
}