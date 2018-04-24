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

//Registrar
Route::get('/Admin/registrar', 'HomeController@registrar')->name('registrar');
Route::post('/Admin/registrar/nuevoA', 'HomeController@registrarNuevoA')->name('nuevoA');
Route::post('/Admin/registrar/nuevoT', 'HomeController@registrarNuevoT')->name('nuevoT');

//Accesos
Route::get('/acceso', 'HomeController@acceso')->name('acceso');
Route::post('/accesoV', 'HomeController@accesoV')->name('accesoV');

Route::get('/configuracion/{id}','HomeController@informacionCuenta');
Route::post('/configuracion/{id}/guardarCambios','HomeController@guardarCambios');
Route::post('/configuracion/{id}/actualizarContraseña','HomeController@actualizaContraseña');
Route::post('configuracion/{id}/updatepassword', 'UserController@updatePassword');

Route::post('/registrarVehiculoA', 'UserController@registrarVehiculoA');

Route::get('home/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "home/search/$search";
    return redirect($route);
});
Route::get("home/search/{search}", "HomeController@search");

Route::post('/Admin/registrar/AccesoA', 'HomeController@registrarAccesoA');

Route::post('/Admin/registrar/AccesoT', 'HomeController@registrarAccesoT');

Route::get('/salida', 'HomeController@salida')->name('BuscarSalida');

Route::get('salida/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('searchs'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('searchs')));
    $route = "salida/searchs/$search";
    return redirect($route);
});
Route::get("salida/searchs/{search}", "HomeController@searchs");

Route::post('/Admin/registrar/SalidaA', 'HomeController@registrarSalidaA');

Route::post('/Admin/registrar/SalidaT', 'HomeController@registrarSalidaT');


Route::get('vehiculo/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('searchh'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('searchh')));
    $route = "vehiculo/searchv/$search";
    return redirect($route);
});
Route::get("vehiculo/searchv/{search}", "HomeController@searchv");

Route::post('/registrarVehiculoT', 'UserController@registrarVehiculoT');

Route::post('/registrarVehiculoV', 'UserController@registrarVehiculoV');