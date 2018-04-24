@extends('layouts.app')
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

.btn {
    height: 40px;
    width: 100px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
    background-color: #74b9ff; 
    color: black; 
    border: 2px solid red;

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
        <form id="searchform"  align="center"  role="search" action="{{url('salida/searchredirect')}}">
            <input type="text"  align="center" class="form-control input-sm" minlength="9" name='searchs' placeholder="Ingresa una matricula" /> 
            <button type="submit"  align="center" class="btn  btn-sm">Buscar</button>
        </div>
	</div>
</div>
</div>

@endsection