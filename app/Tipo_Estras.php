<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Tipo_Estras extends Model {
protected $table = 'tipo_estras';   
    public function get(){
        $tipo_estras = Tipo_Estras::get();
        
        $tipo_estrasArray [''] = 'Seleccione un Tipo de Estrategia';
        foreach ($tipo_estras as $tipo_estra){

            $tipo_estrasArray[$tipo_estra->id] = $tipo_estra->nombre;
        }
        return $tipo_estrasArray;
    }
}