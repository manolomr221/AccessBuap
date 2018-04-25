@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
<h2 align="center">Registrar vehiculo</h2>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Visitante</a></li>
  </ul>
    <div id="menu1"  class="tab-pane fade in active">
    <br>
    <form id="main-contact-form" class= "form-horizontal" name="contact-form" method="POST" action="/registrarVehiculoV" >                                                           
    {{ csrf_field() }}
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
        <button type="submit" class="btn btn-primary form-control" >Guardar Acceso</button>
      </div>
    </div>
  </form>
    
    </div>
  </div>
</div>
@endsection