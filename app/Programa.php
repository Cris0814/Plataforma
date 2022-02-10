<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model{

    protected $table = 'program'; 
    public function get(){
        $programas = Programa::get();
        $programasArray [''] = 'Seleccione un programa';
        foreach ($programas as $programa){

            $programasArray[$programa->id] = $programa->nombre;
        }
        return $programasArray;
    }
}