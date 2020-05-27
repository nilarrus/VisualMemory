@extends('layouts.master')

@section('content')
<!-- JavaScript -->
<script src="{{ URL::asset('js/efects.js')}}"></script>
<script src="{{ URL::asset('js/general.js')}}"></script>

<script> window.onload = function()
    {
        var Nceles = 3;
        generarTables(Nceles,Nceles);
        
        //overlay
        on();
        
        //celes correctes
        celesCorrectes(Nceles,Nceles);
        document.getElementsByClassName("nextLevel")[0].style.visibility = "hidden";
    }
</script>
<body>
    <div class="text-center">
        <div id="overlay" class="gameStart">
        <div id="content">
            <h1>¡EMPEZAMOS!</h1>
            <button class="btn btn-lg btn-primary btn-block" onclick="startGame()">Go</button>
            <p> Se mostraran los cuadrados que tienes que recordar</p>
            <p> quando el borde este en Verde empieza la partida</p>
            <p> selecciona todos los quadrados marcados en verde  en el menor tiempo posible</p>
            <p> las celdas erroneas se marcan en rojo unos instantes</p>
        </div>
        
    </div>

    <div class="game">
        <h1 id="level">Level 1</h1>
        <div class="centrado">        
            <table class="infoTop">
                <tbody>
                    <tr>
                        <td>
                            <p id="time">0</p>
                            
                        </td>
                        <td>
                            <img class="mb-2" src="{{URL::asset('img/clock.png')}}" alt="" width="65" height="65">
                        </td>
                        <td>
                            <p id="fails">0</p>
                        </td>
                        <td>
                            <img class="mb-2" src="{{URL::asset('img/wrong.png')}}" alt="" width="65" height="65">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="centrado"> 
            <table id="table">
            <!-- generado por js -->
            </table>
        </div>
        <div class="centrado"> 
            <div class="nextLevel">
                <a class="btn btn-lg btn-info btn-block" href="#" role="button">Next</a>
            </div>
        </div>
    </div>
    </div>
    
</body>
@stop