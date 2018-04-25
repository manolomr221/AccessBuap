@extends('layouts.app')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

     footer, .nv {
      background-color: #003B5C;
      color: white;
      font-size: 100%;  
    }

   

    .logo-small {
    color: #5d98f7;
    font-size: 50px;
}

#cuadro{
  padding: 10px; 
}
 #ser{
  text-align: center;
    text-transform: uppercase;
    color: black;
    font-family: "Times New Roman", Times, serif;
 }

 hr{border: 0; border-top: 1px solid #003B5C; border-bottom: 1px ;}
  
  p{
    padding: 25px;
  }

  .icon-bar{ background-color: gray;}

  a.nv:hover{
  background-color: white;
  }
  
  .logo-small:hover{
color: #004bc4;
}

body{
  background-color: #f2f2f2;
}

  </style>
@section('content')
@if(\Session::has('error'))
    <div align="center" class="alert alert-danger">
      {{\Session::get('error')}}
    </div>
  @endif
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>


  
<div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-12">
          <div class="container-fluid text-center">
            <h2 id="ser">SERVICIOS</h2>
            <br>
            <h4 id="ser">INICIA SESIÓN PARA REALIZAR ALGUNA DE LAS SIGUIENTES ACCIONES</h4>
           <div class="row">
           <hr> <!-- quitar lineas -->
      <br>
      <br>
      <br>
      <br>
       <a href="{{url ('/home')}}"><div class="col-sm-3" id="cuadro">
          <span class="glyphicon glyphicon-duplicate logo-small"></span>
          <h4>Registrar Accesos Comunidad Buap</h4>
       </div></a>
       <a href="{{url ('/salida')}}"><div class="col-sm-2" id="cuadro">
          <span class="glyphicon glyphicon-calendar logo-small"></span>
         <h4>Registrar Salidas</h4>
      </div></a>
      <a href="{{url ('/Admin/registrar')}}"><div class="col-sm-3" id="cuadro">
         <span class="glyphicon glyphicon-user logo-small"></span>
         <h4>Registrar Personas</h4>
      </div></a>
      <div class="col-sm-2" id="cuadro">
        <a href="{{ url('/vehiculo') }}"><span class="glyphicon glyphicon-road logo-small"></span></a>
        <h4>Registrar Vehiculos</h4>
      </div>
      <div class="col-sm-2" id="cuadro" >
        <span class="glyphicon glyphicon-bold logo-small"></span>
        <h4>Registrar Bicicletas</h4>
      </div>
           </div>
        </div>  
      </div>
    </div>
</div>
<hr>  <!-- quitar lineas -->
<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-2 col-md-4">
          <div class="logo_buap">
		          <a target="blanks" href="http://www.buap.mx/">
		          <img src="http://cmas.siu.buap.mx/portal_pprd/imagenes/recursos_graficos/escudo/escudo_negativo.png"  width="180" height="170" background-color="white">
		          </a>
	        </div>
        </div>
        <div class="col-sm-10 col-md-8" >
           <p><strong>Benemérita Universidad Autónoma de Puebla</strong><br />
            4 Sur 104 Centro Histórico C.P. 72000<br />
            Teléfono +52 (222) 229 55 00</p>
          <div class="redes">
            <a href="https://twitter.com/buapoficial" target="_blank"><img src="http://www.buap.mx/sites/all/themes/nuevo_sitio/img/twitter.png" /></a>
            <a href="https://www.facebook.com/BUAPoficial" target="_blank"><img src="http://www.buap.mx/sites/all/themes/nuevo_sitio/img/facebook.png" /></a>
            <a href="https://instagram.com/buapoficial/" target="_blank"><img src="http://www.buap.mx/sites/all/themes/nuevo_sitio/img/instagram.png" /></a>
            <a href="https://www.youtube.com/user/ibuap" target="_blank"><img src="http://www.buap.mx/sites/all/themes/nuevo_sitio/img/youtube.png" /></a>
          </div>
        </div>
    </div>
</footer>

@endsection