<!DOCTYPE html>
<html lang="en">
<head >
    @extends('layouts.app')
	@section('content')
</head>
<body>	
	</header>
	<div id="" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-8">    			   			
					<h2 class="title text-center">Registro</h2> 
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Datos del vehículo</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="placa" class="form-control" required="required" placeholder="Placas">
				            </div>
				             <div class="form-group col-md-6">
				                <input type="text" name="marca" class="form-control" required="required" placeholder="Marca">
				            </div>
				            <div class="form-group col-md-6">
				                
				                <input type="text" name="modelo" class="form-control" required="required" placeholder="Modelo">
				            </div>
				             <div class="form-group col-md-6">
				                <input type="text" name="color" class="form-control" required="required" placeholder="color">
				            </div>                   
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Registrar">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Foto</h2>
	    				<address>
	    					<center>
	    					<p>insertar foto aquí</p>
	    					<input name="foto" type="file" size=""> 
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>
	@endsection
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>