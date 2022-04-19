<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model{

    protected $table = 'ciudades'; 

    protected $fillable = ['id','nombre','pais_id','ciudaddistrito','ciudadpoblacion'];

    public static function pais(){
        return $this->belongsTo(Pais::class);
    }


    public static function ciudades($id){
        return Ciudad::where('pais_id','=', $id)
        ->get();
    }
    public function get(){
        $ciudades = Ciudad::get();
        $ciudadesArray [''] = 'Seleccione una Ciudad';
        foreach ($ciudades as $ciudad){

            $ciudadesArray[$ciudad->id] = $ciudad->nombre;
        }
        return $ciudadesArray;
    }
}