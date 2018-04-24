<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use App\Alumnos;
use App\Trabajadores;
use App\Visitantes;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
    public function vehiculo()
    {
        return view('vehiculo');
    }

    public function informacionCuenta(Request $request, $id){        
        $ID=Crypt::decrypt($id);
        $info = DB::table('users')->where('id',$ID)->first();     
        return view('/configuracion',['info'=>$info]);       
    }
    public function guardarCambios(Request $request, $id)
    {                
        $ID=Crypt::decrypt($id);         
        DB::table('users')->where('id',$ID)->update([
            'name' => $request->name,            
        ]);
        $info = DB::table('users')->select('*')->where('id',$ID)->first();         
        return redirect()->action('HomeController@informacionCuenta',['id'=>$id]);
    }

    public function configuracion(Request $request, $id)
    {
        return view('configuracion',['user' => Auth::user()]);
    }
    public function actualizaDatosUsuario(Request $request, $id)
    {
        DB::table('users')->where('email',Auth::user()->email)->update(['name'=>$request->nombre]);
        return json_encode("Datos Actualizados correctamente");
    }
    public function actualizaContraseña(Request $request, $id)
    {
        DB::table('users')->where('email',Auth::user()->email)->update(['password'=>$request->contraseña]);
        return json_encode("Datos Actualizados correctamente");
    }


    
    public function search($search){
        $search = urldecode($search);
        $alumnos = Alumnos::select()
                ->where('matricula', 'LIKE', '%'.$search.'%')
                ->first();
        
         $profesores = Trabajadores::select()
        ->where('matricula', 'LIKE', '%'.$search.'%')
         ->first();
        
         $visitantes = Visitantes::select()
         ->where('no_id', 'LIKE', '%'.$search.'%')
          ->first();    

        if (count($alumnos) == 0 && count($profesores) == 0 && count($visitantes) == 0){
            return View('search')
            ->with('message', 'No hay ningun registro con esa matricula...')
            ->with('search', $search);
        } 
        
        if(count($alumnos) >0){
            return View('acceso')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }

        if(count($profesores) >0){
            return View('acceso2')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }

        if(count($visitantes) >0){        
            return View('acceso3')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }
    }

    public function registrarAccesoA(Request $request){
        DB::table('acceso_peatones')->insert([
           'hora_entrada' => date('Y-m-d h:i:s'),
           'hora_salida' => date('Y-m-d 0:0:0'),
           'acceso_entrada' => '0' ,
           'acceso_salida' => '0' ,
           
           'matricula_a' =>$request->matriculaA,
       ]);
    
      return redirect()->action('HomeController@index');
    }

    public function registrarAccesoT(Request $request){
        DB::table('acceso_peatones')->insert([
           'hora_entrada' => date('Y-m-d H:i:s'),
           'hora_salida' => date('Y-m-d 0:0:0'),
           'acceso_entrada' => '0' ,
           'acceso_salida' => '0' ,
           'matricula_t' =>$request->matriculaT,
       ]);
    
      return redirect()->action('HomeController@index');
    }

    public function salida()
    {
        return view('BuscarSalida');
    }

    public function searchs($search){
        $search = urldecode($search);

        $alumnos=DB::table('alumnos')
            ->join('acceso_peatones', 'acceso_peatones.matricula_a' , '=' ,'alumnos.matricula')
            ->select('acceso_peatones.hora_entrada', 'alumnos.*')
            ->where('matricula', 'LIKE', '%'.$search.'%')
            ->first();

                $profesores=DB::table('trabajadores')
                ->join('acceso_peatones', 'acceso_peatones.matricula_t' , '=' ,'trabajadores.matricula')
                ->select('acceso_peatones.hora_entrada', 'trabajadores.*')
                ->where('matricula', 'LIKE', '%'.$search.'%')
                ->first();
    
        
         $visitantes = Visitantes::select()
         ->where('no_id', 'LIKE', '%'.$search.'%')
         ->first();   

          if(count($profesores) >0){
            return View('salida2')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }

          if (count($alumnos) == 0 && count($profesores) == 0 && count($visitantes) == 0){
            return View('searchs')
            ->with('message', 'No hay esa matricula...')
            ->with('search', $search);
        } 
       
        
        if(count($alumnos) >0){
            return View('salida')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }

        

        if(count($visitantes) >0){        
            return View('salida3')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }
    }

    public function registrarSalidaA(Request $request ){
        $hora= $request->hora;
        $current_time = Carbon::now()->toDateTimeString();
        DB::table('acceso_peatones')->where('hora_entrada',  '=', $hora )->update([
           'hora_salida' => $current_time,
       ]);
    
      return redirect()->action('HomeController@salida');
    }

    public function registrarSalidaT(Request $request){
        $hora= $request->hora;
        $current_time = Carbon::now()->toDateTimeString();
        DB::table('acceso_peatones')->where('hora_entrada',  '=', $hora )->update([
            'hora_salida' => $current_time,
        ]);
     
    
      return redirect()->action('HomeController@salida');
    }

  
    public function searchv($search){
        $search = urldecode($search);

        $alumnos = Alumnos::select()
                ->where('matricula', 'LIKE', '%'.$search.'%')
                ->first();
        
         $profesores = Trabajadores::select()
        ->where('matricula', 'LIKE', '%'.$search.'%')
         ->first();
        
         $visitantes = Visitantes::select()
         ->where('no_id', 'LIKE', '%'.$search.'%')
          ->first();    

          if (count($alumnos) == 0 && count($profesores) == 0 && count($visitantes) == 0){
            return View('searchv')
            ->with('message', 'No hay esa matricula vehiculo...')
            ->with('search', $search);
        } 
       
        if(count($alumnos) >0){
            return View('vehiculo1')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }

          if(count($profesores) >0){
            return View('vehiculo2')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }

        if(count($visitantes) >0){        
            return View('vehiculo3')
            ->with('alumnos', $alumnos)
            ->with('profesores', $profesores)
            ->with('visitantes', $visitantes)
            ->with('search', $search);
        }
    }

    public function registrarvehiculoA(Request $request ){
        DB::table('vehiculos')->insert([
            'placas' =>$request->matriculaA,
            'marca' =>$request->matriculaA,
            'modelo'=>$request->matriculaA,
            'color'=>$request->matriculaA,
            
            'matricula_a' =>$request->matriculaA,
        ]);
     
       return redirect()->action('HomeController@index');
    }

    public function registrarvehiculoT(Request $request){
        DB::table('acceso_peatones')->insert([
            'hora_entrada' => date('Y-m-d h:i:s'),
            'hora_salida' => date('Y-m-d 0:0:0'),
            'acceso_entrada' => '0' ,
            'acceso_salida' => '0' ,
            
            'matricula_a' =>$request->matriculaA,
        ]);
     
       return redirect()->action('HomeController@index');
    }





}

