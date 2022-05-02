<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HerraRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Herra;

class HerraController extends Controller
{

    public function herra(){
        $herras = App\Herra::all();
        

        $columnas = Columna::where('tipo_columnas', 'herras')->get();

        return view('herra', compact('herras','columnas'));
    }

    public function crear(HerraRequest $request){

        $this->validate($request,['nombre' => 'required',
        'tipo_herra_id' => 'required',
    
        
        ]);
       $herraNueva = new App\Herra;

       $herraNueva->nombre = $request->nombre;
       $herraNueva->tipo_herra_id = $request->tipo_herra_id;
       
       

       $herraNuevo->save();
       return back()->with('mensaje','Herramienta Agregada');

    }

    public function editar($id){
        $tipoherras = App\Tipo_Herras::all();
        $herras = App\Herra::findOrFail($id);
        return view('editarHerra', compact('herras','tipoherras'));
    }

    public function update(Request $request, $id){

        $this->validate($request,['nombre' => 'required',
        'tipo_herra_id' => 'required',
    
        
        ]);
        $herraUpdate = App\Herra::findOrFail($id);
        $herraUpdate->nombre = $request->nombre;
        $herraUpdate->tipo_herra_id = $request->tipo_herra_id;
        
        $herraUpdate->save();  

        return back()->with('mensaje', 'Herramienta Actualizada');
    }

    public function eliminar($id){

        $herraEliminar = App\Herra::findOrFail($id);
        $herraEliminar->delete();

        return back()->with('mensaje','Herramienta Eliminada');
    }


    
} 