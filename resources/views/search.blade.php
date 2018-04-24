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
      <button align"center" class="btn btn-primary btn-sm">Visitante</button>
</div>
</div>
<h3 align="center">Resultado de la búsqueda: {{$search}}</h3>
@if (isset($message))
<div align="center" class='bg-danger' style='padding: 20px'>
    {{$message}}
</div>
@else


<div class="container">
    <div class="row">
        <div class="col-md-14">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar Proyecto</div>

                        <div class="panel-body" id="imprimir">
                            <header>
                                <div class="container">
                                    <center>
                                        @if($alumnos)
                                        <div class="table-responsive">
                                            <div class="col-md-11">
                                              <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Información</th>
                                                    <th>Nombre</th>
                                                    <th>Facultad</th>
                                                    <th>Carrera</th>
                                                    <th>Etiquetas</th>
                                                  </tr>
                                                </thead>
                                                <tbody>  
                                                @foreach($alumnos as $alumno)    
                                                  <tr>
                                                    <td>{{$alumno->matricula}}</td>
                                                    <td>{{$alumno->nombre}}</td>
                                                    <td>{{$alumno->facultad}}</td>
                                                    <td>{{$alumno->carrera}}</td>
                                                    <td> </td>
                                                  </tr>
                                                @endforeach  
                                                </tbody>
                                              </table>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($profesores) 
                                        <div class="table-responsive">
                                            <div class="col-md-11">
                                              <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Información</th>
                                                    <th>Nombre</th>
                                                    <th>Facultad</th>
                                                    <th>Carrera</th>
                                                   
                                                  </tr>
                                                </thead>
                                                <tbody>  
                                                @foreach($profesores as $profesor)    
                                                  <tr>
                                                    <td>{{$profesor->matricula}}</td>
                                                    <td>{{$profesor->nombre}}</td>
                                                    <td>{{$profesor->facultad}}</td>
                                                   
                                                    <td> </td>
                                                  </tr>
                                                @endforeach  
                                                </tbody>
                                              </table>
                                            </div>
                                        </div>
                                        @elseif ($visitantes) 
                                        <div class="table-responsive">
                                            <div class="col-md-11">
                                              <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Información</th>
                                                    <th>Nombre</th>
                                                    <th>Facultad</th>
                                                    <th>Carrera</th>
                                                   
                                                  </tr>
                                                </thead>
                                                <tbody>  
                                                @foreach($visitantes as $visitante)    
                                                  <tr>
                                                    <td>{{$visitante->no_id}}</td>
                                                    <td>{{$visitante->nombre}}</td>
                                                    
                                                   
                                                    <td> </td>
                                                  </tr>
                                                @endforeach  
                                                </tbody>
                                              </table>
                                            </div>
                                        </div>
                                        @endif
                                    </center>

                                
                                </div>
                            </header>
                        </div>
                    </form>
                </div>            

            </div>
        </div>
    </div>
</div>
@endif
<hr />





@stop