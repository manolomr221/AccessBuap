<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitantes extends Model
{
    //
    protected $filleable =[
        'nombre','no_id'
    ];
    public function Vehiculo(){
        return $this->hasMany('App\vehiculo', 'matricula', 'matricula');
    }
    public function Bicicleta(){
        return $this->hasMany('App\bicicleta', 'matricula', 'matricula');
    }
}
