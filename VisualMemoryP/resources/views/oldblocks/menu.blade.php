@extends('layouts.master')

@section('content')
<body>
    <div class="text-center">
        <div class="menu">
            <h1>Survivor memory</h1>
            <img class="mb-5" src="{{URL::asset('img/logo.png')}}" alt="" width="72" height="72">
            <a class="btn btn-lg btn-primary btn-block" href="/1p" role="button">Un jugador</a>
            <a class="btn btn-lg btn-success btn-block" href="#" role="button">Multijugador</a>
            <a class="btn btn-lg btn-warning btn-block" href="#" role="button">Mapas adicionales</a>
            <p class="mt-5 mb-3 text-muted">© 2020-2020</p>
        </div>
    </div>
    
</body>

@stop