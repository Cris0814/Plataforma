<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Estra extends Model{

    protected $table = 'estras'; 
    public function get(){
        $estras = Estra::get();
        $estrasArray [''] = 'Seleccione una Herramienta';
        foreach ($estras as $estra){

            $estrasArray[$estra->id] = $estra->nombre; 
        }
        return $herrasArray;
    }
}