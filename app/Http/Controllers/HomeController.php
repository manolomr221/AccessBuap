<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

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

}
