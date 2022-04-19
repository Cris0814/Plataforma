<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstraRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Estra;

class EstraController extends Controller
{

    public function estra(){
        $estras = App\Estra::all();
        

        $columnas = Columna::where('tipo_columnas', 'estras')->get();

        return view('estra', compact('estras','columnas'));
    }

    public function crear(EstraRequest $request){

       $estraNueva = new App\Estra;

       $estraNueva->nombre = $request->nombre;
       $estraNueva->tipo_estra_id = $request->tipo_estra_id;
       
       

       $estraNueva->save();
       return back()->with('mensaje','Estrategia Agregada');

    }

    public function editar($id){
        $estras = App\Estra::findOrFail($id);
        return view('editarEstra', compact('estras'));
    }

    public function update(Request $request, $id){

        $estraUpdate = App\Estra::findOrFail($id);
        $estraUpdate->nombre = $request->nombre;
        $estraUpdate->tipo_estra_id = $request->tipo_estra_id;
        
        $estraUpdate->save();  

        return back()->with('mensaje', 'Estrategia Actualizada');
    }

    public function eliminar($id){

        $estraEliminar = App\Estra::findOrFail($id);
        $estraEliminar->delete();

        return back()->with('mensaje','Estrategia Eliminada');
    }


    
} 