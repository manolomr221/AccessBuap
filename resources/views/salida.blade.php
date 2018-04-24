@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container" id="img">
  <h2 align="center">Registrar salida Alumnos</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Alumno</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <form id="formAlumno" class= "form-horizontal" action="/Admin/registrar/SalidaA" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="matriculaA">Matricula:</label>
      <div class="col-sm-10">
        <input type="number" readonly value="{{$alumnos->matricula}}"  required class="form-control" id="matriculaA" placeholder="Ingresa la matricula del Alumno" name="matriculaA">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreAlumno">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" required class="form-control"  readonly id="nombreAlumno" value="{{$alumnos->nombre}}" placeholder="Ingresa Nombre del Alumno" name="nombreAlumno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultadA">Facultad:</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" readonly value="{{$alumnos->facultad}}"  id="facultadA" placeholder="Ingresa la Facultad del Alumno" name="facultadA">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="carrera">Carrera:</label>
      <div class="col-sm-10">          
        <input type="text" required readonly value="{{$alumnos->carrera}}"  class="form-control" id="carrera" placeholder="Ingresa la Carrera del Alumno" name="carrera">
      </div>
    </div>   
    <div class="form-group">
      <label class="control-label col-sm-2" for="hora">Hora Entrada:</label>
      <div class="col-sm-10">          
        <input type="text" required readonly value="{{$alumnos->hora_entrada}}"  class="form-control" id="hora" placeholder="Ingresa la Carrera del Alumno" name="hora">
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