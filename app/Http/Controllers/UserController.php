<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\DocenteRequest;
use App;
use App\User;
use App\Institucion;
use App\Programa;
use Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

class UserController extends Controller
{

    public function user(){
        $auth = Auth::user()->id;
        
        if (Auth::user()->getRoleNames() == '["admin"]'){

            $users = User::where('is_admin', false)->get();
        }else {
            $users = User::where('id', $auth)->get();
        }
        
        // dd($users);
        return view('user',compact('users'));
    }

    public function admin(){
        // // $auth = Auth::admin()->id;
        // $admins = App\admin::where('id', $auth)->get();
        // // dd($users);
        // return view('Admin',['admins' => $admins]);
        //$admins = User::all();
        $admins = User::where('is_admin', true)->get();
        
        return view('admin', compact('admins'));
    }
// para crear Docente
    public function crear(Request $request){
        
        
        $request['password'] = Hash::make('secret');
        $request['is_admin'] = true;
        // dd($request->all());

       $userNuevo = User::create($request->all());

    //    $userNuevo->name = $request->name;
    //    $userNuevo->edad = $request->edad;
    //    $userNuevo->programa = $request->programa;
    //    $userNuevo->asignatura = $request->asignatura;
    //    $userNuevo->num_estudiante = $request->num_estudiante;
    //    $userNuevo->num_m_h = $request->num_m_h;
    //    $userNuevo->semestre = $request->semestre;
    //    $userNuevo->modalidad = $request->modalidad;
    //    $userNuevo->save();

        switch ($request['role']) {
            case '1':
                $userNuevo->assignRole('admin');
                return back()->with('mensaje','Adminstrador Agregado');
                break;
            case '2':
                $userNuevo->assignRole('docente');
                return back()->with('mensaje','Docente Agregado');
                break;
        }
       

    }

    public function editar($id){
        $users = App\User::findOrFail($id);
        $instituciones = App\Instituciones::all();
        // dd($instituciones);
        return view('editarUser')
        ->with(compact('users', 'instituciones'));
    }

    public function update(Request $request, $id){

        // dd($request->all());
        $userUpdate = App\User::findOrFail($id);
        $userUpdate->name = $request->name; 
        $userUpdate->edad = $request->edad; 
        $userUpdate->institucion = $request->institucion;
        $userUpdate->programa = $request->programa; 
        $userUpdate->asignatura = $request->asignatura;
        $userUpdate->num_estudiante = $request->num_estudiante; 
        $userUpdate->num_m = $request->num_m;
        $userUpdate->num_h = $request->num_h;
        $userUpdate->semestre = $request->semestre; 
        $userUpdate->modalidad = $request->modalidad; 
        $userUpdate->save();

        return back()->with('mensaje', 'Docente Actualizado');
    }

    public function eliminar($id){
         
        $userEliminar = App\User::findOrFail($id);
        $userEliminar->delete();

        return back()->with('mensaje', 'Docente Eliminado');
    }

    public function byInstitucion($id){
        return Programa::where('institucion_id', $id)->get();
    }

    public function exportExcel()
    {
        return Excel::download(new UserExport, 'Info.csv');
    }
}