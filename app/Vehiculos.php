<?php

namespace App;


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculos extends Model
{
    //
    protected $filleable =[
        'placas','modelo', 'color','marca',
    ];
    
    public function trabajador(){
        return $this-> belongsTo('App\trabajador', 'matricula', 'matricula');
    }
    public function alumno(){
        return $this-> belongsTo('App\alumno', 'matricula', 'matricula');
    }
}
