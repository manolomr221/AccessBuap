@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
<h2 align="center">Registrar Bicicleta</h2>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Trabajador</a></li>
  </ul>
    <div id="menu1"  class="tab-pane fade in active">
    <br>
    <form id="main-contact-form" class= "form-horizontal" name="contact-form" method="POST" action="/registrarBicicletaT" >                                                           
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
    <h3 align="center">Ingrese datos de la Bicicleta</h3> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="marca">Marca:</label>
      <div class="col-sm-10">          
      <input type="text" name="marca" class="form-control" required="required" placeholder="Ingresa la Marca de la Bicicleta">
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="rodada">Rodada:</label>
      <div class="col-sm-10">          
      <input type="number" name="rodada" class="form-control" required="required" placeholder="Ingresa la rodada de la bicicleta">
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