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
    }
</script>
<body class="text-center">
    <div id="overlay" class="gameStart">
        <div id="content">
            <h1>¡EMPEZAMOS!</h1>
            <button class="btn btn-lg btn-primary btn-block" onclick="startGame()">Go</button>
        </div>
    </div>

    <div class="game">
        <h1 id="level">Level 1</h1>
        <div class="centrado">        
            <table class="infoTop">
                <tbody>
                    <tr>
                        <td>
                            <img class="mb-2" src="{{URL::asset('img/clock.png')}}" alt="" width="65" height="65">
                            
                        </td>
                        <td><p id="time">00:00</p></td>
                        <td>
                            <img class="mb-2" src="{{URL::asset('img/wrong.png')}}" alt="" width="65" height="65">
                        </td>
                        <td><p id="fails">0</p></td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        <div class="centrado">
            <table id="table">
            <!-- generado por js -->
            </table>
        </div>
        
    </div>
</body>
@stop