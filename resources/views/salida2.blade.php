@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container" id="img">
  <h2 align="center">Registrar salida Trabajadores</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Trabajador</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <form id="formTrabajador" class= "form-horizontal" action="/Admin/registrar/SalidaT" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="matriculaT">Matricula:</label>
      <div class="col-sm-10">
        <input type="number" readonly value="{{$profesores->matricula}}"  required class="form-control" id="matriculaT" placeholder="Ingresa la matricula del Alumno" name="matriculaT">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreTrabajor">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" required class="form-control"  readonly id="nombreAlumno" value="{{$profesores->nombre}}" placeholder="Ingresa Nombre del Alumno" name="nombreTrabajador">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultadA">Facultad:</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" readonly value="{{$profesores->facultad}}"  id="facultadA" placeholder="Ingresa la Facultad del Alumno" name="facultadA">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hora">Hora Entrada:</label>
      <div class="col-sm-10">          
        <input type="text" required readonly value="{{$profesores->hora_entrada}}"  class="form-control" id="hora" placeholder="Ingresa la Carrera del Alumno" name="hora">
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
</div>
@endsection