var celesCorr;
var celesN;

function detectar(nCel) {
    console.log("numero de la celda: "+nCel);
    var celdas = document.getElementsByClassName("celda");
    if(celesN.includes(nCel)){
        celdas[nCel].style.backgroundColor = "green";
    }else{
        setTimeout(function(){
            celdas[nCel].style.backgroundColor = "wheat";
        }, 2000);
        celdas[nCel].style.backgroundColor = "red";
         
        var txt = parseInt(document.getElementById("fails").textContent)+1;
        document.getElementById("fails").innerText =txt;
    }
}

//coloca el onclick, onmousover, onmousout en cada celda para poder interactuar y jugar
function generarMouseOptions() {
    var lista = document.getElementsByClassName("celda");
    
    for(var index = 0; index<lista.length ; index++ ){

        lista[index].setAttribute("onclick","detectar("+index+")");
        
    }    
}
//genera un numero random y comprueba que no se repita.
function generarNRandom(t) {
    //console.log("genrar NRandom total: "+t);
    var ran = Math.floor(Math.random()*t);
    
    if(celesN.includes(ran)){
        console.log("numero repetit: "+ran);
        return generarNRandom(t);
    }else{
        console.log("numero no repetit: "+ran);
        return ran;
    }   
}
//genera el numero de celdas correctas correspondiente al total de celdas del nivell
function celesCorrectes(x,y) {
    var total = x*y;
    //console.log("Total de celes: "+total);
    celesCorr= new Array(x);
    celesN = new Array(x);
    var celdas = document.getElementsByClassName("celda");
    for (var index = 0; index < x; index++) {
        var celda = generarNRandom(total);       
        celesCorr[index] = celdas.item(celda);
        celesN[index] = celda;
        //console.log(celesCorr[index]);
    } 
}

function playCelesCorrectes(Ccorrectes) {
    console.log(Ccorrectes);

    //mostrar les celes correctes
    setTimeout(function(){
        var list = document.getElementsByClassName("celda");
        for(var c = 0; c<list.length; c++){
            //console.log(list[c]);
            list[c].style.backgroundColor='wheat';
        }
        generarMouseOptions();
    }, 3000);
    for(var c = 0; c<Ccorrectes.length; c++){
        //console.log(Ccorrectes[c]);
        Ccorrectes[c].style.backgroundColor='green';
    }

    

}
function playTime() {
   // console.log("play time");
}
function playLevel(params) {
   // console.log("play Level");
}
//genera la tabla de forma dinamica correspondiente al numero del nivell pasado por paramentro.
function generarTables(x,y) {
    //seleccionamos la tabla
    var tlb = document.getElementById("table");
    //creamos el elemento tbody
    var tblBody = document.createElement("tbody");
    
    //creacion de las celdas
    for(var row=0; row<x; row++){
        var r = document.createElement("tr");

        for(var col = 0; col<y; col++){
            
            var cell = document.createElement("td");            
            var att = document.createAttribute("class");
 
            att.value="celda";
            cell.setAttributeNode(att);
            //cell.appendChild(img);
            r.appendChild(cell);

        }
        //añadimos el contenido al body
        tblBody.appendChild(r);
    }
    // añadimos el tbody dentro de la tabla
    tlb.appendChild(tblBody);
}
//Lanzador de funciones en cascada para el funcionamiento del juego.
function startGame() {
    off();
    playCelesCorrectes(celesCorr);
    playTime();
    playLevel();
}