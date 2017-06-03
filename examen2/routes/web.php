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

Route::group(['middlaware' => ['web']], function(){
	Route::resource('/clientes','ClientesController');
	Route::resource('/productos','ProductosController');
	Route::resource('/inventario','InventarioController');
	Route::resource('/usuarios','UsuariosController');
});
Route::get('/destroyCliente/{id}', 'ClientesController@destroy');
