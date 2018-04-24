@extends('layouts.app')
@section('content')
  <title>AccesBuap</title>
<div class="container">
  <h2 align="center">Registrar Accesos</h2>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu2">Visitante</a></li>
  </ul>
  
    </div>
    <div id="menu2" class="tab-pane fade in active">
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