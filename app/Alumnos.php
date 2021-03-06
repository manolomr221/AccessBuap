<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $filleable =[
        'nombre', 'matricula', 'facultad', 'carrera'
    ];
    
    public function Vehiculo(){
        return $this->hasMany('App\vehiculo', 'matricula', 'matricula');
    }
    public function Bicicleta(){
        return $this->hasMany('App\bicicleta', 'matricula', 'matricula');
    }
}
