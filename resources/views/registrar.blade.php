<!DOCTYPE html>
<html lang="en">
<head>
  <title>AccesBuap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

    footer{
      height: 40%;
      padding: 5px;
      padding-bottom: 20px;
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
</head>

<body>
<nav class="navbar nv">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand nv" href="{{ url('/') }}">AccesBuap</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav nav-pills navbar-right">
    <!-- Authentication Links -->
    @if (Auth::check())
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a 
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12">
            <div class="container-fluid text-center">
                <h2 id="ser">REGISTRO</h2>
                
            </div>  
        </div>
        <div class="form-check">
                    <input class="form-check-input" type="radio" name="registrarPersona" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Alumno
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registrarPersona" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                    Trabajador
                    </label>
                </div>
                <form id="traba" class= "form-horizontal" action="/Admin/registrar/nuevoT" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                        <label class="col-sm-2 control-label">Número Trabajador</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="matricula" name="matricula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombreAlumno" name="nombreAlumno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Facultad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="facultad" name="facultad">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                          <button id="guardarCambios" type="submit" class="btn btn-primary form-control" >Guardar Cambios</button>
                        </div>
                     
                </form>
                <form id="formAlumno" class= "form-horizontal" action="/Admin/registrar/nuevoA" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                        <label class="col-sm-2 control-label">Matricula</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="matricula" name="matricula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombreAlumno" name="nombreAlumno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Facultad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="facultad" name="facultad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Carrera</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="carrera" name="carrera">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                          <button id="guardarCambios" type="submit" class="btn btn-primary form-control" >Guardar Cambios</button>
                        </div>
                     
                </form>
    </div>
    
</div>
<hr>  <!-- quitar lineas -->
<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-2 col-md-4">
          <div class="logo_buap">
		          <a target="blanks" href="http://www.buap.mx/">
		          <img src="http://radiobuap.com/wp-content/uploads/2014/07/EscudoBUAPnegro350x350.png"  width="180" height="170" background-color="white">
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
</body>
</html>
<script>
$(document).ready(function() {
    $('input[type=radio][name=registrarPersona]').change(function() {
        if (this.value == 'option1') {
            $("form#formAlumno").css("display","block");
            $("form#traba").hide();
        }
        if (this.value == 'option2') {
            $("form#formAlumno").hide();
            $("form#traba").css("display","block");
        }
    });
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>