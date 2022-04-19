<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/editarUser/{id}/programa','UserController@byInstitucion');
Route::get('herramienta', 'HerramientaController@infoitesa');
// Route::resource('admin','AdminController@byPais');
Route::get('/admin/{id}/ciudad','AdminController@byPais');
Route::get('/editarAdmin/{id}/ciudad','AdminController@byPais');
Route::get('/institucion/{id}/ciudad','AdminController@byPais');
Route::get('/editarInstitucion/{id}/ciudad','AdminController@byPais');
Route::get('/estrategia/{id}/estra','EstrategiaController@byEstra');
Route::get('/editarEstrategia/{id}/estra','EstrategiaController@byEstra');
Route::get('/estrategia/{id}/herra','EstrategiaController@byHerra');
Route::get('/editarEstrategia/{id}/herra','EstrategiaController@byHerra');