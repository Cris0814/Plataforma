<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
// use Auth;
class AdminController extends Controller
{

    public function admin(){
        // // $auth = Auth::admin()->id;
        // $admins = App\admin::where('id', $auth)->get();
        // // dd($users);
        // return view('Admin',['admins' => $admins]);
        $admins = App\Admin::all();
        return view('admin', compact('admins'));
    }
// para crear administrador
    public function crear(Request $request){
       // return $request->all();

       $request->validate([
                'nombre' => 'required',
                'email' => 'required',    
                'institucion' => 'required',
                'tipo' => 'required',
                'pais' => 'required',
                'ciudad' => 'required',
                'region' => 'required',
                
       ]);

       $adminNuevo = new App\Admin;
       $adminNuevo->name = $request->name;
       $adminNuevo->email = $request->email;
       $adminNuevo->institucion = $request->institucion;
       $adminNuevo->tipo = $request->tipo;
       $adminNuevo->pais = $request->pais;
       $adminNuevo->ciudad = $request->ciudad;
       $adminNuevo->region = $request->region;
       $adminNuevo->save();

       $userNuevo->assignRole('admin');
       
       return back()->with('mensaje','Admin Agregado');

    }

    public function editar($id){
        $admins = App\Admin::findOrFail($id);
        return view('editarAdmin', compact('admins'));
    }

    public function update(Request $request, $id){

        
        $adminUpdate = App\Admin::findOrFail($id);
        $adminUpdate->name = $request->name; 
        $adminUpdate->email = $request->email; 
        $adminUpdate->institucion = $request->institucion; 
        $adminUpdate->tipo = $request->tipo; 
        $adminUpdate->pais = $request->pais; 
        $adminUpdate->ciudad = $request->ciudad; 
        $adminUpdate->region = $request->region; 
        $adminUpdate->save();

        return back()->with('mensaje', 'Admin Actualizado');
    }

    public function eliminar($id){
         
        $adminEliminar = App\Admin::findOrFail($id);
        $adminEliminar->delete();

        return back()->with('mensaje', 'Admin Eliminado');
    }
}