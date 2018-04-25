<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function updatePassword(Request $request, $id){
        $ID=Crypt::decrypt($id);
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()->action('HomeController@informacionCuenta',['id'=>$id])->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                     return redirect()->action('HomeController@informacionCuenta',['id'=>$id])->with('status', 'Contraseña cambiada con éxito');
            }
            else
            {
                return redirect()->action('HomeController@informacionCuenta',['id'=>$id])->with('message', 'Contraseña incorrecta');
            }
        }
    }

    public function registrarVehiculoA(Request $request){
        DB::table('vehiculos')-> insert([
            'placas'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'color'=>$request->color,
            'matricula_a' =>$request->matriculaA,
            ]);

            DB::table('acceso_vehiculos')->insert([
                'hora_entrada' => date('Y-m-d H:i:s'),
                'acceso_entrada' => '0' ,
                'acceso_salida' => '0' ,
                'placas'=>$request->placa,
                'matricula_a' =>$request->matriculaA,
            ]);
        return redirect()->action('HomeController@vehiculo')->with('message','Registro correcto'); 
    }

    public function registrarVehiculoT(Request $request){
        DB::table('vehiculos')-> insert([
            'placas'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'color'=>$request->color,
            'matricula_t' =>$request->matriculaT,
            ]);

            DB::table('acceso_vehiculos')->insert([
                'hora_entrada' => date('Y-m-d H:i:s'),
                'hora_salida' => date('Y-m-d 0:0:0'),
                'acceso_entrada' => '0' ,
                'acceso_salida' => '0' ,
                'placas'=>$request->placa,
                'matricula_t' =>$request->matriculaT,
            ]);
        return redirect()->action('HomeController@vehiculo')->with('message','Registro correcto'); 
    }

    public function registrarVehiculoV(Request $request){
        DB::table('vehiculos')-> insert([
            'placas'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'color'=>$request->color,
            'matricula_v' =>$request->no_id,
            ]);
            DB::table('acceso_vehiculos')->insert([
                'hora_entrada' => date('Y-m-d H:i:s'),
                'hora_salida' => date('Y-m-d 0:0:0'),
                'acceso_entrada' => '0' ,
                'acceso_salida' => '0' ,
                'placas'=>$request->placa,
                'matricula_v' =>$request->no_id,
            ]);
        return redirect()->action('HomeController@vehiculo')->with('message','Registro correcto'); 
    }

    public function registrarVisitante(Request $request){
        DB::table('vehiculos')-> insert([
            'no_id'=>$request->no_id,
            'nombre'=>$request->nombre,
            'motivo'=>$request->motivo
            ]);
        return redirect()->action('HomeController@vehiculo')->with('message','Registro correcto'); 
    }
    public function bicicletas(){
        return view('bicicleta');
    }
    public function registrarBiciA(Request $request){
        DB::table('bicicletas')->insert([
            'rodada' =>$request->matriculaA,
            'marca' =>$request->color,
            'color'=>$request->color,
            'matricula_a' =>$request->matriculaA,
        ]);

        DB::table('acceso_bicicletas')->insert([
            'hora_entrada' => date('Y-m-d h:i:s'),
            'acceso_entrada' => '0' ,
            'acceso_salida' => '0' ,
            'matricula_a' =>$request->matriculaA,
        ]);
        return redirect()->action('UserController@bicicletas');
    }
    public function registrarBiciT(Request $request){
        
        DB::table('bicicletas')->insert([
            'rodada' =>$request->matriculaT,
            'marca' =>$request->marca,
            'color'=>$request->color,
            'matricula_t' =>$request->matriculaT,
        ]);

        DB::table('acceso_bicicletas')->insert([
            'hora_entrada' => date('Y-m-d h:i:s'),
            'acceso_entrada' => '0' ,
            'acceso_salida' => '0' ,
            'matricula_t' =>$request->matriculaT,
        ]);
        return redirect()->action('UserController@bicicletas');
    }

}
