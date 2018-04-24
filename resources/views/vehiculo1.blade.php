@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
  <h3 align="center">Registrar vehiculo</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Alumno</a></li>
  </ul>
  <h3 align="center">Datos personales</h3>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <form id="main-contact-form" class= "form-horizontal" name="contact-form" method="POST" action="/registrarVehiculoA" >                                                           
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
    <h3 align="center">Ingrese datos del vehiculo</h3> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="placa">Placas:</label>
      <div class="col-sm-10">          
      <input type="text" name="placa" class="form-control" required="required" placeholder="Ingresa las Placas del vehuiculo">
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="marca">Marca:</label>
      <div class="col-sm-10">          
      <input type="text" name="marca" class="form-control" required="required" placeholder="Ingresa la Marca del vehiculo">
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="modelo">Modelo:</label>
      <div class="col-sm-10">          
      <input type="text" name="modelo" class="form-control" required="required" placeholder="Ingresa el Modelo del vehiculo">
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="color">Color:</label>
      <div class="col-sm-10">          
      <input type="text" name="color" class="form-control" required="required" placeholder="Ingresa el Color del vehiculo">
      </div>
    </div>  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary form-control" >Guardar </button>
      </div>
    </div>
  </form>
  <br>
    </div>
    </div>
  </div>
</div>
@endsection