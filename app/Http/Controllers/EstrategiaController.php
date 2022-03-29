<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstrategiaRequest;
use App\Http\Requests\HerramientaRequest;
use App\Http\Request\DocenteRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Estrategia;
use App\Herramienta;
use Auth;
use App\User;
use App\Exports\UserExport;

class EstrategiaController extends Controller
{

    public function estrategia(){
        $estrategias = App\Estrategia::all();
        $herramientas = App\Herramienta::all();
        $auth = Auth::user()->id;
        
        if (Auth::user()->getRoleNames() == '["admin"]'){

            $users = User::where('is_admin', false)->get();
        }else {
            $users = User::where('id', $auth)->get();
        }

        $columnas = Columna::where('tipo_columnas', 'estrategias')->get();

        return view('estrategia', compact('estrategias','herramientas','users','columnas'));
    }

    public function crear(EstrategiaRequest $request){

       $estrategiaNueva = new App\Estrategia;

       $estrategiaNueva->tipo_estra = $request->tipo_estra;
       $estrategiaNueva->nom_estra = $request->nom_estra;
       $estrategiaNueva->valoracion_estra = $request->valoracion_estra;
       $estrategiaNueva->estra_evaluacion = $request->estra_evaluacion;
       $estrategiaNueva->compete_evaluar = $request->compete_evaluar;
       $estrategiaNueva->tipo_herra = $request->tipo_herra;
       $estrategiaNueva->nom_herra = $request->nom_herra;
       
       
       

       $estrategiaNueva->save();
       return back()->with('mensaje','Estrategia Agregada');

    }

    public function editar($id){
        $estrategias = App\Estrategia::findOrFail($id);
        return view('editarEstrategia', compact('estrategias'));
    }

    public function update(Request $request, $id){

        $estrategiaUpdate = App\Estrategia::findOrFail($id);
        $estrategiaUpdate->tipo_estra = $request->tipo_estra;
        $estrategiaUpdate->nom_estra = $request->nom_estra;
        $estrategiaUpdate->valoracion_estra = $request->valoracion_estra;
        $estrategiaUpdate->estra_evaluacion = $request->estra_evaluacion;
        $estrategiaUpdate->compete_evaluar = $request->compete_evaluar;
        $estrategiaUpdate->tipo_herra = $request->tipo_herra;
        $estrategiaUpdate->nom_herra = $request->nom_herra;
        
        
        
        $estrategiaUpdate->save();  

        return back()->with('mensaje', 'Estrategia Actualizada');
    }

    public function eliminar($id){

        $estrategiaEliminar = App\Estrategia::findOrFail($id);
        $estrategiaEliminar->delete();

        return back()->with('mensaje','Estrategia Eliminada');
    }


    
}