<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tipo_HerraRequest;
use App\Http\Requests\HerraRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Tipo_Herras;
use App\Herra;

class TipoHerraController extends Controller
{

    public function tipo_herra(){
        $tipoherras = App\Tipo_Herras::all();
        $herras = App\Herra::all();

        $columnas = Columna::where('tipo_columnas', 'tipoherras')->get();

        return view('tipo_herra', compact('tipoherras','herras','columnas'));
    }

    public function crear(Tipo_HerraRequest $request){

       $tipoherraNueva = new App\Tipo_Herras;

       $tipoherraNueva->nombre = $request->nombre;
       
       

       $tipoherraNueva->save();
       return back()->with('mensaje','Tipo de Herramienta Agregada');

    }

    public function editar($id){
        $tipoherras = App\Tipo_Herras::findOrFail($id);
        return view('editarTipo_herra', compact('tipoherras'));
    }

    public function update(Request $request, $id){

        $tipoherraUpdate = App\Tipo_Herras::findOrFail($id);
        $tipoherraUpdate->nombre = $request->nombre;
        
        
        $tipoherraUpdate->save();  

        return back()->with('mensaje', 'Tipo de Herramienta Actualizada');
    }

    public function eliminar($id){

        $tipoherraEliminar = App\Tipo_Herras::findOrFail($id);
        $tipoherraEliminar->delete();

        return back()->with('mensaje','Tipo de Herramienta Eliminada');
    }



} 