<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ColumnaRequest;
use App\Columna;

class ColumnaController extends Controller
{
    // public function columna(){
    //     $columnas = App\Columna::all();
    //     return view('columna', compact('columnas'));
    // }

    public function store(Request $request){
    //  dd($request->all());
       $columnaNueva = new Columna;

       $columnaNueva->nombre = $request->nombre;
       $columnaNueva->tipo_columnas = $request->tipo_columnas;

       $columnaNueva->save();
       
       return back()->with('mensaje','Columna Agregada');

    }  

    public function eliminarcol($id){
        // dd($id);
        $columnaEliminar = Columna::find( (integer)$id);
        $columnaEliminar->delete();

        return back();
    }
}
