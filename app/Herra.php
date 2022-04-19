<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Herra extends Model{

    protected $table = 'herras'; 
    public function get(){
        $herras = Herra::get();
        $herrasArray [''] = 'Seleccione una Herramienta';
        foreach ($herras as $herra){

            $herrasArray[$herra->id] = $herra->nombre; 
        }
        return $herrasArray;
    }
}