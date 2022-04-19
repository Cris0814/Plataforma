<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InstitucionRequest;
use App\Http\Requests\ProgramaRequest;
use App\Http\Requests\PaisesRequest;
use App\Http\Requests\ColumnaRequest;
use App;
use App\Columna;
use App\Institucion;
use App\Programa;
use App\Pais;
use App\Ciudad;

class InstitucionController extends Controller
{

    public function institucion(){
        $instituciones = App\Institucion::all();
        $programas = App\Programa::all();
        $paises = App\Pais::all();
        $ciudades = App\Ciudad::all();

        $columnas = Columna::where('tipo_columnas', 'instituciones')->get();

        return view('institucion', compact('instituciones','programas','paises','columnas','ciudades'));
    }

    public function crear(InstitucionRequest $request){

       $institucionNueva = new App\Institucion;

       $institucionNueva->nombre = $request->nombre;
       $institucionNueva->pais = $request->pais;
       $institucionNueva->ciudad = $request->ciudad;
       $institucionNueva->tipo = $request->tipo;
       

       $institucionNueva->save();
       return back()->with('mensaje','Institucion Agregada');

    }

    public function editar($id){
        $instituciones = App\Institucion::findOrFail($id);
        $paises = App\Pais::all();
        return view('editarInstitucion', compact('instituciones','paises'));
    }

    public function update(Request $request, $id){

        $institucionUpdate = App\Institucion::findOrFail($id);
        $institucionUpdate->nombre = $request->nombre;
        $institucionUpdate->pais = $request->pais;
        $institucionUpdate->ciudad = $request->ciudad;
        $institucionUpdate-> tipo = $request->tipo;
        
        $institucionUpdate->save();  

        return back()->with('mensaje', 'Institucion Actualizada');
    }

    public function eliminar($id){

        $institucionEliminar = App\Institucion::findOrFail($id);
        $institucionEliminar->delete();

        return back()->with('mensaje','Institucion Eliminada');
    }

    public function byPais($id){
        return Ciudad::where('pais_id', $id)->get();
    }

} 