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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('users','UsersController');
Route::resource('users/email.password','UsersController');


Route::get('inspeccion/{fecha}/{finca_id}/{num_visita}','InspeccionesController@store',['only' => [
 'store'
]]);

Route::get('detalles/{peso}/{ce}/{sa}/{observaciones}','DetallesController@store',['only' => [
 'store'
]]);

Route::resource('animales/','AnimalesController');

Route::resource('propietarios/','PropietariosController');

Route::resource('registros/','RegistrosController');

Route::resource('fincas/','FincasController');

