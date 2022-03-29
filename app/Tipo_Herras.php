<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Tipo_Herras extends Model {
protected $table = 'tipo_herras';   
    public function get(){
        $tipo_herras = Tipo_Herras::get();
        
        $tipo_herrasArray [''] = 'Seleccione un Tipo de Herramienta';
        foreach ($tipo_herras as $tipo_herra){

            $tipo_herrasArray[$tipo_herra->id] = $tipo_herra->nombre;
        }
        return $tipo_herrasArray;
    }
}