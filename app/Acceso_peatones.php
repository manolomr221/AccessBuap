<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso_peatones extends Model
{
    protected $filleable =[
        'hora_entrada','hora_salida', 'acceso_entrada', 'acceso_salida'
    ];
    
    public function trabajador(){
        return $this-> belongsTo('App\trabajador', 'matricula', 'matricula');
    }
    public function alumno(){
        return $this-> belongsTo('App\alumno', 'matricula', 'matricula');
    }
    public function visitante(){
        return $this-> belongsTo('App\alumno', 'no_id', 'no_id');
    }
}
