<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();



//Controlador de inicio
Route::get('/Inicio',  'InicioController@index')->name('inicio');

//modifiacion de registros
Route::get('/contacto/modificar/{contacto}', 'ContactosController@actualizarGestion')->name('contacto.modificar');
//update de registro
Route::patch('/Inicio', 'ContactosController@setGestionado')->name('contacto.gestionado');
//Eliminar registro
Route::get('/contacto/eliminar/{contacto}', 'ContactosController@eliminar')->name('contacto.eliminar');
//lista de registros contactados
Route::get('/Contactados', 'InicioController@verContactados')->name('contacto.contactados');
//lista de registros no contactados
Route::get('/No_Contactados', 'InicioController@verNoContactados')->name('contacto.no_contactados');
//registros devolver llamado
Route::get('/Devolver_Llamado', 'InicioController@verAgendados')->name('contacto.devolver_llamado');
//administrador de contactos
Route::get('/contactos_administrador', 'Inicio_Controller@getAll')->name('contactos_administrador');

//listar usuarios
Route::get('/users' ,'UsersController@index')->name('users');
//Eliminar usuario
Route::get('/users/eliminar/{id}', 'UsersController@eliminarUsuario')->name('users.eliminar');
//Actulizar datos de usuario
Route::patch('/users/modificar/perfil', 'UsersController@modificarPerfil')->name('users.perfil.modificar');
//Buscar usuario
Route::get('/Inicio/find','Inicio_Controller@searchUsers');
//usuario admin
Route::get('/usuarios_administrador','UsersController@search')->name('users.search');
