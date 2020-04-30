@extends('layouts.master')

@section('content')


<body class="text-center">
    <form class="form-box">
        <img class="mb-4" src="{{URL::asset('img/logo.png')}}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
        <label for="inputName" class="sr-only">Nombre</label>
        <input type="text" id="inputName" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Requerdame
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <a class="btn btn-lg btn-info btn-block" href="/r" role="button">Registar</a>
        <p class="mt-5 mb-3 text-muted">© 2020-2020</p>
    </form>
</body>
@stop