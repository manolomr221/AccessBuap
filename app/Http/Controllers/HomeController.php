<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function registrar()
    {
        return view('registrar');
    }
    public function registrarNuevoA(Request $request){
        DB::table('alumnos')->insert([
           'nombre' => $request->nombreAlumno,
           'matricula' => $request->matricula,
           'facultad' =>$request->facultad,
           'carrera' => $request->carrera,
       ]);
    
      return redirect()->action('HomeController@registrar');
    }
    public function registrarNuevoT(Request $request){
        DB::table('trabajadores')->insert([
           'nombre' => $request->nombreAlumno,
           'matricula' => $request->matricula,
           'facultad' =>$request->facultad,
       ]);
    
      return redirect()->action('HomeController@registrar');
    }

    public function acceso(){
        return view('acceso');
    }
    public function accesoV(Request $request){
        $current_time = Carbon::now()->toDateTimeString();
        DB::table('visitantes')->insert([
            'no_id' => $request->no_id,
            'nombre' => $request->nombreV,
           'motivo' =>$request->motivo,
       ]);
       DB::table('acceso_peatones')->insert([
        'hora_entrada' => $current_time,
        'acceso_entrada' => $request->acceso_entrada,
        'matricula_v' => $request->no_id,
    ]);
    
      return redirect()->action('HomeController@registrar');
    }

}