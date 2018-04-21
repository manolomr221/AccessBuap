@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
  <h2 align="center">Registrar Accesos</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Alumno</a></li>
    <li><a data-toggle="tab" href="#menu1">Trabajador</a></li>
    <li><a data-toggle="tab" href="#menu2">Visitante</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <form id="formAlumno" class= "form-horizontal" action="/Admin/registrar/nuevoA" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="matriculaA">Matricula:</label>
      <div class="col-sm-10">
        <input type="number" required class="form-control" id="matriculaA" placeholder="Ingresa la matricula del Alumno" name="matriculaA">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreAlumno">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" required class="form-control" id="nombreAlumno" placeholder="Ingresa Nombre del Alumno" name="nombreAlumno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultadA">Facultad:</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="facultadA" placeholder="Ingresa la Facultad del Alumno" name="facultadA">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="carrera">Carrera:</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="carrera" placeholder="Ingresa la Carrera del Alumno" name="carrera">
      </div>
    </div>   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary form-control" >Guardar Acceso</button>
      </div>
    </div>
  </form>
    </div>
    <div id="menu1" class="tab-pane fade">
    <br>
    <form id="traba" class= "form-horizontal" action="/Admin/registrar/nuevoT" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="matriculaT">Numero de Trabajador</label>
      <div class="col-sm-10">
        <input type="number" required class="form-control" id="matriculaT" placeholder="Ingresa numero de trabajador" name="matriculaT">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreT">Nombre</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="nombreT" placeholder="Ingresa Nombre del Trabajador" name="nombreT">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultadT">Facultad</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="facultadT" placeholder="Ingresa la Facultad del Trabajador" name="facultadT">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary form-control" >Guardar Acceso</button>
      </div>
    </div>
  </form>
    </div>
    <div id="menu2" class="tab-pane fade">
    <br>
    <form id="formVisitante" class= "form-horizontal" action="/accesoV" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="no_id">Número de Identificación:</label>
      <div class="col-sm-10">
        <input type="number" required class="form-control" id="no_id" placeholder="Ingresa el número de identificación" name="no_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombrev">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="nombrev" placeholder="Ingresa el Nombre del Visitante" name="nombrev">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="motivo">Motivo de la visita</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="motivo" placeholder="Ingresa el Motivo de la visita" name="motivo">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="acceso_entrada">Acceso</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="acceso_entrada" placeholder="Ingresa el acceso por el cual entra" name="acceso_entrada">
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