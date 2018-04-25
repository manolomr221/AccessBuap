@extends('layouts.app')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<style> 
#search {
    float: right;
    margin-top: 9px;
    width: 350px;
}

.search {
    padding: 5px 0;
    width: 22%;
    height: 80px;
    position: relative;
    left: 450px;
    float: left;
    line-height: 22px;
}
input[type=text]:focus {
    border: 3px solid #00004d;
}
    .search input {
        -webkit-transition: width 0.4s ease-in-out;
        border: 1px solid #3385ff;
        font-size: 15px;
        position: absolute;
        width: 0px;
        float: Left;
        margin-left: 250px;
        -webkit-transition: all 0.7s ease-in-out;
        -moz-transition: all 0.7s ease-in-out;
        -o-transition: all 0.7s ease-in-out;
        transition: all 0.7s ease-in-out;
        height: 40px;
        line-height: 18px;
        padding: 0 2px 0 2px;
        border-radius:1px;
    }

        .search:hover input, .search input:focus {
            width: 200px;
            margin-left: 0px;
        }

.btn4 {
    height: 40px;
    width: 100px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
}

.btn2{
    position: absolute;
    top: 300px;
    right: 48%;
}

#h2{
    color: white;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
}

#img{
    width: 100%;
    height: 110%;
    background-image: url("{{ asset('/imagenes/buap.jpg') }}");
}

</style>
@section('content')

    <div class="container" id="img">
    <br><br><br><br><br>
    <div class="container" align="center">
        <div class="row"  align="center">
            <h2 id="h2">Ingresa una matricula </h2>
            <div class="search">
            <form id="searchform"  align="center"  role="search" action="{{url('vehiculo/searchredirect')}}">
                <input type="text"  align="center" class="form-control input-sm" minlength="9" name='searchh' placeholder="Ingresa una matricula" /> 
                <button type="submit"  align="center" class="btn btn4 btn-primary btn-sm">Buscar</button>
                
            </div>
            
        </div>
    </div>

    <div class="modal fade" id="nuevoVisitante" tabindex="-1" role="dialog" aria-labelledby="Nuevo Visitante">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Nuevo Visitante</h4>
        </div>

        <form id="formVisitante" method="POST" action="/vehiculo/RegistroVisitante" >

            {{ csrf_field() }} <!-- ESTE TOKEN ES IMPORTANTE PARA PODER ENVIAR DATOS AL SERVER... si no lo incluyes habra error ya que la informacion no es "confiable" -->
            <div class="modal-body">
            <input type="number" required class="form-control" id="no_id"  name="no_id" placeholder="Ingresa Numero de Identificación"><br>
            <input type="text" required class="form-control" id="nombre" placeholder="Ingresa Nombre del Visitante" name="nombreV"><br>
            <input type="text" required class="form-control" id="motivo" placeholder="Ingresa Motivo de Visita" name="motivo"><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelar">Cerrar</button>
                <button id="submit" type="submit" class="btn btn-primary form-control" >Guardar Acceso</button>
            </div>
    </form>
        </div>
    </div>
    </div>


    </div>
    <script>
        $(document).ready(function(){               
        
            $('button#nuevoCom').click(function(){
                $('#nuevoVisitante').modal('show');

            });
            $('button#submit').click(function(){
                
            
            });
            
        });
    </script>

@endsection