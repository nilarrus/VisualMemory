@extends('layouts.app')

@section('content')
<!-- JavaScript -->
<script src="{{ URL::asset('js/efects.js')}}"></script>
<script src="{{ URL::asset('js/general.js')}}"></script>

<div class="container">
    
    <div class="text-center">
        <div id="Inicio" class="gameStart">
        <div id="content">
            <h1>¡EMPEZAMOS!</h1>
            <button class="btn btn-lg btn-primary btn-block" onclick="startGame()">Go</button>
            <p> Se mostraran los cuadrados que tienes que recordar</p>
            <p> quando el borde este en Verde empieza la partida</p>
            <p> selecciona todos los quadrados marcados en verde  en el menor tiempo posible</p>
            <p> las celdas erroneas se marcan en rojo unos instantes</p>
        </div>
    </div>

    <div id="header" class="mb-4">
        <div id="level" class="row mb-0 mt-0">           
            <div class="col text-right">Nivel</div>
            <div id="nivel" class="col text-left">@php echo $_POST["level"];@endphp</div> 
        </div>
        <div class="row mt-0 mb-0">
            <div class="col">
                <div class="row">
                    <div class="col text-right">
                        <img src="{{URL::asset('img/clock.png')}}" alt="" width="45" height="45">
                    </div>
                    <div class="col text-left">
                        <p id="gameTime">0</p>
                    </div>
                </div>           
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right">
                        <img src="{{URL::asset('img/wrong.png')}}" alt="" width="45" height="45">
                    </div>
                    <div class="col text-left">
                        <p id="gameFails">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="game centrado">     
        <table id="table" class="table-game">
            
                <!-- generado por js -->
            
        </table>
    </div>        
</div>
<script> window.onload = function()
    {
        var nivel = parseInt($('#nivel').text());
        
        var Nceles = nivel+2;
        generarTables(Nceles,Nceles);
        
        //overlay inicial
        on("Inicio");
        
        //celes correctes
        celesCorrectes(Nceles,Nceles);
        /*
        document.getElementsByClassName("nextLevel")[0].style.visibility = "hidden";
        */
    }
</script>
@endsection