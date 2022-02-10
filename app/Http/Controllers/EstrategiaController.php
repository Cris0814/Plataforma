<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstrategiaRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Estrategia;

class EstrategiaController extends Controller
{

    public function estrategia(){
        $estrategias = App\Estrategia::all();
        

        $columnas = Columna::where('tipo_columnas', 'estrategias')->get();

        return view('estrategia', compact('estrategias','columnas'));
    }

    public function crear(EstrategiaRequest $request){

       $estrategiaNueva = new App\Estrategia;

       $estrategiaNueva->nom_estra = $request->nom_estra;
       $estrategiaNueva->estra_apren_interactivo = $request->estra_apren_interactivo;
       $estrategiaNueva->estra_apren_colabo = $request->estra_apren_colabo;
       $estrategiaNueva->estra_autoapren = $request->estra_autoapren;
       $estrategiaNueva->estra_didactica = $request->estra_didactica;
       $estrategiaNueva->compete_evaluar = $request->compete_evaluar;
       $estrategiaNueva->estra_evaluacion = $request->estra_evaluacion;
       $estrategiaNueva->valoracion_estra = $request->valoracion_estra;

       $estrategiaNueva->save();
       return back()->with('mensaje','Estrategia Agregada');

    }

    public function editar($id){
        $estrategias = App\Estrategia::findOrFail($id);
        return view('editarEstrategia', compact('estrategias'));
    }

    public function update(Request $request, $id){

        $estrategiaUpdate = App\Estrategia::findOrFail($id);
        $estrategiaUpdate->nom_estra = $request->nom_estra;
        $estrategiaUpdate->nom_estra = $request->nom_estra;
        $estrategiaUpdate->estra_apren_interactivo = $request->estra_apren_interactivo;
        $estrategiaUpdate->estra_apren_colabo = $request->estra_apren_colabo;
        $estrategiaUpdate->estra_autoapren = $request->estra_autoapren;
        $estrategiaUpdate->estra_didactica = $request->estra_didactica;
        $estrategiaUpdate->compete_evaluar = $request->compete_evaluar;
        $estrategiaUpdate->estra_evaluacion = $request->estra_evaluacion;
        $estrategiaUpdate->valoracion_estra = $request->valoracion_estra;
        $estrategiaUpdate->save();  

        return back()->with('mensaje', 'Estrategia Actualizada');
    }

    public function eliminar($id){

        $estrategiaEliminar = App\Estrategia::findOrFail($id);
        $estrategiaEliminar->delete();

        return back()->with('mensaje','Estrategia Eliminada');
    }
}