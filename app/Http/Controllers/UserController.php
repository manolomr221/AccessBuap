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

    public function registrarVehiculo(Request $request){
        DB::table('vehiculos')-> insert([
            'placas'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'color'=>$request->color
            ]);
        return redirect()->action('HomeController@vehiculo')->with('message','Registro correcto'); 
    }

}
