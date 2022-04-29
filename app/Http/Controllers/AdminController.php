<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Request\DocenteRequest;
use App\User;
use App\Pais;
use App\Ciudad;
use Auth;
use Illuminate\Support\Facades\Hash;

use App\Exports\UserExport;
// use Auth;
class AdminController extends Controller
{

    public function admin(){
        // // $auth = Auth::admin()->id;
        // $admins = App\admin::where('id', $auth)->get();
        // // dd($users);
        // return view('Admin',['admins' => $admins]);
        $admins = App\Admin::all();
        $ciudades = App\Ciudad::all();
        $instituciones = App\Instituciones::all();
        return view('admin')
        ->with(compact('admins','ciudades','instituciones'));
    }
// para crear administrador
    public function crear(Request $request){
       // return $request->all();

       $request->validate([
                'nombre' => 'required',
                'email' => 'required',    
                'institucion' => 'required',
                
                'pais' => 'required',
                'ciudad' => 'required',
                'region' => 'required',
                
       ]);

       $adminNuevo = new App\Admin;
       $adminNuevo->name = $request->name;
       $adminNuevo->email = $request->email;
       $adminNuevo->institucion = $request->institucion;
       $
       $adminNuevo->pais = $request->pais;
       $adminNuevo->ciudad = $request->ciudad;
       $adminNuevo->region = $request->region;
       $adminNuevo->save();

       $userNuevo->assignRole('admin');
       
       return back()->with('mensaje','Admin Agregado');
       
    }

    public function editar($id){
        $users = App\User::findOrFail($id);
        $instituciones = App\Instituciones::all();
        $paises = App\Pais::all();
        
        
        // dd($instituciones);
        return view('editarAdmin')
        ->with(compact('users', 'instituciones','paises'));
    }

    public function update(Request $request, $id){

        
        $adminUpdate = App\User::findOrFail($id);
        $adminUpdate->name = $request->name; 
        $adminUpdate->email = $request->email; 
        $adminUpdate->institucion = $request->institucion; 
        
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

    public function getCiudad(Request $request, $id){
        if($request->ajax()){
            $ciudades = Ciudad::ciudades($id);
            return response()->json($ciudades);
        }
    } 
    public function byPais($id){
        return Ciudad::where('pais_id', $id)->get();
    }
}