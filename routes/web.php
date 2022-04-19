<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('user', 'UserController@user')->name('user')->middleware('auth');
Route::post('user', 'UserController@crear')->name('user.crear');
//Route::post('user', 'UserController@store')->name('user.store');
//Route::get('programa','UserController@getPrograma');
Route::get('/User-list-excel', 'UserController@exportExcel')->name('user.excel');
Route::get('/editarUser/{id}', 'UserController@editar')->name('user.editar');
Route::put('/editarUser/{id}', 'UserController@update')->name('user.update');
Route::delete('eliminar/{id}', 'UserController@eliminar')->name('user.eliminar'); 

Route::get('admin', 'UserController@admin')->name('admin')->middleware('auth');
Route::get('admin','UserController@admin')->name('admin');
// Route::get('ciudad/{id}','UserController@getCiudad')->name('admin');
// Route::post('admin', 'AdminController@crear')->name('admin.crear');
Route::get('/editarAdmin/{id}', 'AdminController@editar')->name('admin.editar');
Route::put('/editarAdmin/{id}', 'AdminController@update')->name('admin.update');
Route::delete('eliminarAdmin/{id}', 'AdminController@eliminar')->name('admin.eliminar');




Route::get('herramienta', 'HerramientaController@herramienta')->name('herramienta');
 Route::post('herramienta', 'HerramientaController@crear')->name('herramienta.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarHerramienta/{id}', 'HerramientaController@editar')->name('herramienta.editar');
Route::put('/editarHerramienta/{id}', 'HerramientaController@update')->name('herramienta.update');
Route::delete('eliminarHerramienta/{id}', 'HerramientaController@eliminar')->name('herramienta.eliminar'); 




Route::get('estrategia', 'EstrategiaController@estrategia')->name('estrategia');
Route::post('estrategia', 'EstrategiaController@crear')->name('estrategia.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
// Route::post('estrategia/', 'HerramientaController@crear')->name('herramienta.crear');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarEstrategia/{id}', 'EstrategiaController@editar')->name('estrategia.editar');
Route::put('/editarEstrategia/{id}', 'EstrategiaController@update')->name('estrategia.update');
Route::delete('eliminarEstrategia/{id}', 'EstrategiaController@eliminar')->name('estrategia.eliminar'); 


// Route::post('estrategia', 'EstrategiaController@nueva')->name('estrategia.nueva');
// Route::get('/editarHerramienta/{id}', 'EstrategiaController@editarherramienta')->name('estrategia.editarherramienta');
// Route::put('/editarHerramienta/{id}', 'EstrategiaController@updateherramienta')->name('estrategia.updateherramienta');
// Route::delete('eliminarHerramienta/{id}', 'EstrategiaController@eliminarherramienta')->name('estrategia.eliminarherramienta'); 


Route::get('institucion', 'InstitucionController@institucion')->name('institucion');
Route::post('institucion', 'InstitucionController@crear')->name('institucion.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarInstitucion/{id}', 'InstitucionController@editar')->name('institucion.editar');
Route::put('/editarInstitucion/{id}', 'InstitucionController@update')->name('institucion.update');
Route::delete('eliminarInstitucion/{id}', 'InstitucionController@eliminar')->name('institucion.eliminar'); 

Route::get('programa', 'ProgramaController@programa')->name('programa');
Route::post('programa', 'ProgramaController@crear')->name('programa.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarPrograma/{id}', 'ProgramaController@editar')->name('programa.editar');
Route::put('/editarPrograma/{id}', 'ProgramaController@update')->name('programa.update');
Route::delete('eliminarPrograma/{id}', 'ProgramaController@eliminar')->name('programa.eliminar'); 


Route::get('administrador', function () {
    return view('administrador');
});


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {

    return view('auth.login');
});
Route::get('/excel', 'HomeController@excel')->name('home.excel');

Route::get('tipo_estra', 'TipoEstraController@tipo_estra')->name('tipo_estra');
Route::post('tipo_estra', 'TipoEstraController@crear')->name('tipo_estra.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarTipo_estra/{id}', 'TipoEstraController@editar')->name('tipo_estra.editar');
Route::put('/editarTipo_estra/{id}', 'TipoEstraController@update')->name('tipo_estra.update');
Route::delete('eliminarTipo_estra/{id}', 'TipoEstraController@eliminar')->name('tipo_estra.eliminar');

Route::get('estra', 'EstraController@estra')->name('estra');
Route::post('estra', 'EstraController@crear')->name('estra.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarEstra/{id}', 'EstraController@editar')->name('estra.editar');
Route::put('/editarEstra/{id}', 'EstraController@update')->name('estra.update');
Route::delete('eliminarEstra/{id}', 'EstraController@eliminar')->name('estra.eliminar'); 

Route::get('tipo_herra', 'TipoHerraController@tipo_herra')->name('tipo_herra');
Route::post('tipo_herra', 'TipoHerraController@crear')->name('tipo_herra.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarTipo_herra/{id}', 'TipoHerraController@editar')->name('tipo_herra.editar');
Route::put('/editarTipo_herra/{id}', 'TipoHerraController@update')->name('tipo_herra.update');
Route::delete('eliminarTipo_herra/{id}', 'TipoHerraController@eliminar')->name('tipo_herra.eliminar');

Route::get('herra', 'HerraController@herra')->name('herra');
Route::post('herra', 'HerraController@crear')->name('herra.crear');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarHerra/{id}', 'HerraController@editar')->name('herra.editar');
Route::put('/editarHerra/{id}', 'HerraController@update')->name('herra.update');
Route::delete('eliminarHerra/{id}', 'HerraController@eliminar')->name('herra.eliminar'); 