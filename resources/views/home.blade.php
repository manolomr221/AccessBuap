@extends('layouts.app')

<style>


i.fa-chrome{
    color:#47d147;
    font-size:48px;
}
</style>
@section('content')
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="hi col-md-6">
                  icono  <i class="fab fa-adn"></i>
<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
