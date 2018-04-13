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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
	
Route::get('/vehiculo', 'HomeController@vehiculo')->name('vehiculo');

Route::get('/configuracion/{id}','HomeController@informacionCuenta');
Route::post('/configuracion/{id}/guardarCambios','HomeController@guardarCambios');
Route::post('/configuracion/{id}/actualizarContraseña','HomeController@actualizaContraseña');
Route::post('configuracion/{id}/updatepassword', 'UserController@updatePassword');

