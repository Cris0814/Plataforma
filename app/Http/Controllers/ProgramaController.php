<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramaRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Programa;

class ProgramaController extends Controller
{

    public function programa(){
        $programas = App\Programa::all();
        

        $columnas = Columna::where('tipo_columnas', 'programas')->get();

        return view('programa', compact('programas','columnas'));
    }

    public function crear(ProgramaRequest $request){

       $programaNuevo = new App\Programa;

       $programaNuevo->nombre = $request->nombre;
       $programaNuevo->institucion_id = $request->institucion_id;
       
       

       $programaNuevo->save();
       return back()->with('mensaje','Programa Agregado');

    }

    public function editar($id){
        $programas = App\Programa::findOrFail($id);
        return view('editarPrograma', compact('programas'));
    }

    public function update(Request $request, $id){

        $programaUpdate = App\Programa::findOrFail($id);
        $programaUpdate->nombre = $request->nombre;
        $programaUpdate->institucion_id = $request->institucion_id;
        
        $programaUpdate->save();  

        return back()->with('mensaje', 'Programa Actualizado');
    }

    public function eliminar($id){

        $programaEliminar = App\Programa::findOrFail($id);
        $programaEliminar->delete();

        return back()->with('mensaje','Programa Eliminado');
    }


    
} 