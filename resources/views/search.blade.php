@extends('home')

@section('content')
<div class="container" align="center">
<div class="row"  align="center">
  <h2>Ingresa una matricula </h2>
      <div class="search">
      <form id="searchform"  align="center"  role="search" action="{{url('home/searchredirect')}}">
          <input type="text"  align="center" class="form-control input-sm" minlength="9" name='search' placeholder="Ingresa una matricula" /> 
          <button type="submit"  align="center" class="btn btn-primary btn-sm">Buscar</button>
      </div>
</div>
</div>
<h3 align="center">Resultado de la búsqueda: {{$search}}</h3>
@if (isset($message))
<div align="center" class='bg-danger' style='padding: 20px'>
    {{$message}}
</div>
@else
@endif
@stop