@extends('layouts.app')
<style>
.panel-primary>.panel-heading {
    color: red;
}
</style>
@section('content')

<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
<div class="container">             
    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading labelmenu menu">Información de Cuenta</div>
                <div class="panel-body">                    
                    <form id="editarInformacion" class="form-horizontal" action="{{ url('/configuracion/'.encrypt($info->id).'/guardarCambios') }}" method="POST">                                                           
                        {{ csrf_field() }}
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="{{$info->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Correo Electronico</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" value="{{$info->email}}" readonly>
                        </div>
                    </div>   
                      <input type="hidden" value="{{$info->id}}" name="id">        
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">                      
                    <div class="form-group">
                        <div class="col-sm-10 col-md-offset-2">
                          <button id="guardarCambios" type="submit" class="btn btn-primary form-control" >Guardar Cambios</button>
                        </div>
                    </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>        
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading labelmenu">Cambiar Contraseña</div>
                    <div class="panel-body">
                        <form  class="form-horizontal" method="post"  action="{{ url('/configuracion/'.encrypt($info->id).'/updatepassword') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="mypassword" class="col-sm-2 control-label">Contraseña Actual</label>
                                <div class="col-sm-10">
                                     <input type="password"  name="mypassword" class="form-control" >
                            </div>
                                 @if (Session::has('message'))
                                 <br> <br>
                                    <div class="alert alert-danger text-danger">
                                    {{Session::get('message')}}
                                    </div>
                                 @endif
                                     <div class="text-danger" align="center">{{$errors->first('mypassword')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Nueva Contraseña</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password">
                                    </div>       
                            <div class="text-danger" align="center"> <strong>  {{$errors->first('password')}}</strong></div>
                            </div>
                        <div class="form-group">
                            <label for="mypassword" class="col-sm-2 control-label">Repetir Contraseña</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div> 
                        <div class="form-group">
                        <div class="col-sm-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary form-control">Cambiar mi contraseña</button>
                          </form>
                            @if (Session::has('status'))
                          <div class="alert alert-success">
                            <strong>{{Session::get('status')}}</strong>
                          </div>
                        </div>      
                        @endif
                    </div> 
                </div>         
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection