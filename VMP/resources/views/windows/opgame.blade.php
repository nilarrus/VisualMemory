@extends('layouts.app')

@section('content')
1 jugador nivel = @php echo $_POST["level"]; @endphp
<div class="container">
    <div class="col border border-dark text-center">
        <div class="row">
            <div class="col-sm">1</div>
            <div class="col-sm">2</div>
            <div class="col-sm">3</div>
        </div>
        <div class="row">
            <div class="col-sm">1</div>
            <div class="col-sm">2</div>
            <div class="col-sm">3</div>
        </div>
        <div class="row">
            <div class="col-sm">1</div>
            <div class="col-sm">2</div>
            <div class="col-sm">3</div>
        </div>
    </div>
    
</div>




<!--
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
            -->
            <!-- generado por js -->
            <!--
            </table>
        </div>
        <div class="centrado"> 
            <div class="nextLevel">
                <a class="btn btn-lg btn-info btn-block" href="#" role="button">Next</a>
            </div>
        </div>
    </div>
    </div>
-->    
@endsection