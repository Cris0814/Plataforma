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
Route::delete('columna-eliminar/{id}', 'ColumnaController@eliminarcol')->name('columna.eliminarcol');
Route::get('/editarEstrategia/{id}', 'EstrategiaController@editar')->name('estrategia.editar');
Route::post('columna-store/', 'ColumnaController@store')->name('columna');
Route::put('/editarEstrategia/{id}', 'EstrategiaController@update')->name('estrategia.update');
Route::delete('eliminarEstrategia/{id}', 'EstrategiaController@eliminar')->name('estrategia.eliminar'); 


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