@extends('layouts.master')
@section('content')
<body class="text-center">
    <form class="form-box">
            
        <h1 class="h3 mb-3 font-weight-normal">Registro</h1>
        <img class="mb-4" src="{{URL::asset('img/logo.png')}}" alt="" width="72" height="72">
        <label for="inputName" class="sr-only">Nombre</label>
        <input type="text" id="inputName" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Correo electronico</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>

        <p class="mt-5 mb-3 text-muted">© 2020-2020</p>
    </form>
</body>
@stop
    
