<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HerramientaRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Estrategia;
use App\User;

use App\Herramienta;

class HerramientaController extends Controller
{

    public function herramienta(){
        $herramientas = App\Herramienta::all();
        $estrategias = App\Estrategia::all();
        

        $columnas = Columna::where('tipo_columnas', 'herramientas')->get();


        return view('herramienta', compact('herramientas','estrategias','columnas','users'));
    }

    public function crear(Request $request){
       // return $request->all();
    //    dd($request->columnas);
    
       $herramientaNueva = new App\Herramienta;


    //    $entidadNueva = new App\Entidad;
        

       $herramientaNueva->nom_herra = $request->nom_herra;
       
       $herramientaNueva->tipo_licencia = $request->tipo_licencia;
       $herramientaNueva->funciones = $request->funciones;
       $herramientaNueva->interaccion = $request->interaccion;
       $herramientaNueva->diseño = $request->diseño;
       $herramientaNueva->usabilidad = $request->usabilidad;
       $herramientaNueva->documentacion = $request->documentacion;
       $herramientaNueva->actualizaciones = $request->actualizaciones;
       $herramientaNueva->porcentaje_aprove = $request->porcentaje_aprove;
       $herramientaNueva->porcentaje_aproba = $request->porcentaje_aproba;
       
       $herramientaNueva->save();
       

       
       
    //    foreach($request->columnas as $columna ){
    //     $entidadNueva = new App\Entidad;
    //     $entidadNueva->id_columna = $columna->id_columna; 
    //     $entidadNueva->value = $columna->nombre;
    //     $entidadNueva->id_estrategia = null;
    //     $entidadNueva->id_herramienta = $herramientaNueva->id;
    //     $entidadNueva->save();
    //    }
        
        
       
       return back()->with('mensaje','Herramienta Agregada');
       

    }
    public function editar($id){
        $herramientas = App\Herramienta::findOrFail($id);
        return view('editarHerramienta', compact('herramientas'));
    }

    public function update(Request $request, $id){


     
        

        $herramientaUpdate = App\Herramienta::findOrFail($id);
        $herramientaUpdate->nom_herra = $request->nom_herra;
        
        $herramientaUpdate->tipo_licencia = $request->tipo_licencia;
        $herramientaUpdate->funciones = $request->funciones;
        $herramientaUpdate->interaccion = $request->interaccion;
        $herramientaUpdate->diseño = $request->diseño;
        $herramientaUpdate->usabilidad = $request->usabilidad;
        $herramientaUpdate->documentacion = $request->documentacion;
        $herramientaUpdate->actualizaciones = $request->actualizaciones;
        $herramientaUpdate->porcentaje_aprove = $request->porcentaje_aprove;
        $herramientaUpdate->porcentaje_aproba = $request->porcentaje_aproba;
        $herramientaUpdate->save();
       
        return back()->with('mensaje','Herramienta Actualizada');
    }

    public function eliminar($id){
         
        $herramientaEliminar = App\Herramienta::findOrFail($id);
        $herramientaEliminar->delete();

        return back()->with('mensaje', 'Herramienta Eliminada');
    }

    public function infoitesa(){

        $herramientaInfo = App\Herramienta::all();

        return response()->json($herramientaInfo);
    }
    
}
