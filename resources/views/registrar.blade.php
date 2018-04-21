@extends('layouts.app')
@section('content')<div class="container">
<title>AccesBuap</title>
  <h2 align="center">REGISTRO</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Alumno</a></li>
    <li><a data-toggle="tab" href="#menu1">Trabajador</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <form id="formAlumno" class= "form-horizontal" action="/Admin/registrar/nuevoA" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="matricula">Matricula:</label>
      <div class="col-sm-10">
        <input type="number" required class="form-control" id="matricula" placeholder="Ingresa la matricula del Alumno" name="matricula">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreAlumno">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" required class="form-control" id="nombreAlumno" placeholder="Ingresa Nombre del Alumno" name="nombreAlumno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultad">Facultad:</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="facultad" placeholder="Ingresa la Facultad del Alumno" name="facultad">
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
      <label class="control-label col-sm-2" for="matricula">Numero de Trabajador</label>
      <div class="col-sm-10">
        <input type="number" required class="form-control" id="matricula" placeholder="Ingresa numero de trabajador" name="matricula">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreAlumno">Nombre</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="nombreAlumno" placeholder="Ingresa Nombre del Trabajador" name="nombreAlumno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="facultad">Facultad</label>
      <div class="col-sm-10">          
        <input type="text" required class="form-control" id="facultad" placeholder="Ingresa la Facultad del Trabajador" name="facultad">
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