@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
<h2 align="center">Registrar Accesos</h2>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Trabajador</a></li>
  </ul>
    <div id="menu1"  class="tab-pane fade in active">
    <br>
    <form id="traba" class= "form-horizontal" action="/Admin/registrar/AccesoT" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="matriculaT">Numero de Trabajador</label>
      <div class="col-sm-10">
        <input type="number" readonly value="{{$profesores->matricula}}" required class="form-control" id="matriculaT" placeholder="Ingresa numero de trabajador" name="matriculaT">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreT">Nombre</label>
      <div class="col-sm-10">          
        <input type="text" readonly value="{{$profesores->nombre}}"  required class="form-control" id="nombreT" placeholder="Ingresa Nombre del Trabajador" name="nombreT">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultadT">Facultad</label>
      <div class="col-sm-10">          
        <input type="text" readonly value="{{$profesores->facultad}}"  required class="form-control" id="facultadT" placeholder="Ingresa la Facultad del Trabajador" name="facultadT">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary form-control" >Guardar Acceso</button>
      </div>
    </div>
  </form>
    
    </div>
  </div>
</div>
@endsection