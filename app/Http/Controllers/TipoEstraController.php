<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tipo_EstraRequest;
use App\Http\Requests\EstraRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Tipo_Estras;
use App\Estra;

class TipoEstraController extends Controller
{

    public function tipo_estra(){
        $tipoestras = App\Tipo_Estras::all();
        $estras = App\Estra::all();

        $columnas = Columna::where('tipo_columnas', 'tipoestras')->get();

        return view('tipo_estra', compact('tipoestras','estras','columnas'));
    }

    public function crear(Tipo_EstraRequest $request){

       $tipoestraNueva = new App\Tipo_Estras;

       $tipoestraNueva->nombre = $request->nombre;
       
       

       $tipoestraNueva->save();
       return back()->with('mensaje','Tipo de Estrategia Agregada');

    }

    public function editar($id){
        $tipoestras = App\Tipo_Estras::findOrFail($id);
        return view('editarTipo_estra', compact('tipoestras'));
    }

    public function update(Request $request, $id){

        $tipoestraUpdate = App\Tipo_Estras::findOrFail($id);
        $tipoestraUpdate->nombre = $request->nombre;
        
        
        $tipoestraUpdate->save();  

        return back()->with('mensaje', 'Tipo de Estrategia Actualizada');
    }

    public function eliminar($id){

        $tipoestraEliminar = App\Tipo_Estras::findOrFail($id);
        $tipoestraEliminar->delete();

        return back()->with('mensaje','Tipo de Estrategia Eliminada');
    }



} 