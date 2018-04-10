<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicletas extends Model
{
    protected $filleable =[
        'rodada', 'color','marca',
    ];
    
    public function trabajador(){
        return $this-> belongsTo('App\trabajador', 'matricula', 'matricula');
    }
    public function alumno(){
        return $this-> belongsTo('App\alumno', 'matricula', 'matricula');
    }

}
