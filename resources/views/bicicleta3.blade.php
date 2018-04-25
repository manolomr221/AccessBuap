@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
<h2 align="center">Registrar Bicicleta</h2>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Visitante</a></li>
  </ul>
    <div id="menu1"  class="tab-pane fade in active">
    <br>
    <form id="main-contact-form" class= "form-horizontal" name="contact-form" method="POST" action="/registrarBicicletaV" >                                                           
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="no_id">Numero de identificacion</label>
      <div class="col-sm-10">
        <input type="number" readonly value="{{$visitantes->no_id}}" required class="form-control" id="no_id"  name="no_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombreT">Nombre</label>
      <div class="col-sm-10">          
        <input type="text" readonly value="{{$visitantes->nombre}}"  required class="form-control" id="nombreT" placeholder="Ingresa Nombre del Trabajador" name="nombreT">
      </div>
    </div>
    <h3 align="center">Ingrese datos de la Bicicleta</h3> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="marca">Marca:</label>
      <div class="col-sm-10">          
      <input type="text" name="placa" class="form-control" required="required" placeholder="Ingresa la Marca de la Bicicleta">
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="rodada">Rodada:</label>
      <div class="col-sm-10">          
      <input type="number" name="modelo" class="form-control" required="required" placeholder="Ingresa la rodada de la bicicleta">
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