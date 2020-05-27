@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white">Menu Principal</div>

                <div class="card-body bg-secondary text-white">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="col-md-12 text-center">
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Solo contra infinitos niveles, demuestra que puedes recorda todas las celdas</p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Un jugador</a>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">El que gane mas rapido sobrevive el que no cae el ultimo se lleva la gloria</p>
                                    <a class="btn btn-lg bg-success" href="#" role="button">Multijugador</a>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Mapas no incluidos en un jugador por su dificultad, entre otras cosas</p>
                                    <a class="btn btn-lg btn-info" href="#" role="button">Mapas adicionales</a>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mt-2 mb-2">© 2020-2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
