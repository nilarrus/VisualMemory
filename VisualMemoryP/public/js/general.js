var celesCorr;
var celesN;
var IDinterval;
var finJuego =0 ;

/**
 * Fin del juego 
 * limpiamos el timer
 * canviamos el borde para el usuario note el final del juego 
 * 
 */
function finalJuego(){
    clearInterval(IDinterval); 
    document.getElementById("table").style.border=("7px solid black");
    deshabilitarMoiseOptions();
    //document.getElementsByClassName("nextLevel")[0].style.visibility = "visible";
}
/**
 * Gestion del click en cada celda detecta si es una celda correcta o no 
 * y lanza el final del juego quando estan todas las celdas iniciales seleccionadas.
 * @param {Integer} nCel 
 */
function detectar(nCel) {
    //console.log("numero de la celda: "+nCel);
    var celdas = document.getElementsByClassName("celda");
    if(celesN.includes(nCel)){
        celdas[nCel].style.backgroundColor = "green";
        finJuego = finJuego +1;
        //fin partida actual
        if(celesCorr.length == finJuego){
            finalJuego();
        }
    }else{
        setTimeout(function(){
            celdas[nCel].style.backgroundColor = "wheat";
        }, 1000);
        celdas[nCel].style.backgroundColor = "red";
        
        var txt = parseInt(document.getElementById("fails").textContent)+1;
        document.getElementById("fails").innerText =txt;
    }
}
/**
 * Habilita el onclick en cada celda
 */
function habilitarMouseOptions() {
    //var lista = document.getElementsByClassName("celda");
    var lista = $("td.celda");
    for(var index = 0; index<lista.length ; index++ ){
        lista[index].setAttribute("onclick","detectar("+index+")");
        /*lista.on("click",function () {
            detectar(index);
        });*/
    }   
}
/**
 * Deshabilita el onclick en cada celda
 */
function deshabilitarMoiseOptions() {
    var lista = $("td.celda");
    for(var index = 0; index<lista.length ; index++ ){
        lista[index].setAttribute("onclick","detectar(-"+1+")");
        /*lista.on("click",function () {
            detectar(index);
        });*/
    }  
}
/**
 * genera un numero random y comprueba que no se repita.
 * @param {Integer} t 
 */
function generarNRandom(t) {
    //console.log("genrar NRandom total: "+t);
    var ran = Math.floor(Math.random()*t);
    
    if(celesN.includes(ran)){
        //console.log("numero repetit: "+ran);
        return generarNRandom(t);
    }else{
        //console.log("numero no repetit: "+ran);
        return ran;
    }   
}
/**
 * genera el numero de celdas correctas correspondiente al total de celdas del nivell
 * @param {Integer} x 
 * @param {Integer} y 
 */
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
/**
 * Mostrar las celdas correctas al usuario
 * @param {HtmlColection} Ccorrectes 
 */
function playCelesCorrectes(Ccorrectes) {
    //console.log(Ccorrectes);

    //mostrar les celes correctes
    setTimeout(function(){
        var list = document.getElementsByClassName("celda");
        for(var c = 0; c<list.length; c++){
            //console.log(list[c]);
            list[c].style.backgroundColor='wheat';
        }
        habilitarMouseOptions();
        playTime();
        document.getElementById("table").style.border=("7px solid green");
    }, 3000);
    for(var c = 0; c<Ccorrectes.length; c++){
        //console.log(Ccorrectes[c]);
        Ccorrectes[c].style.backgroundColor='green';
    }
}
/**
 * Tiempo de juego
 */
function relog() {
    //console.log(document.getElementById("time").textContent);
    var reg = document.getElementById("time").textContent
    var time =parseInt(reg)+1;
    document.getElementById("time").innerHTML = time;
}
/**
 * Lanzar el tiempo de juego
 */
function playTime() {
    IDinterval = setInterval(relog,1000);
}
/**
 * genera la tabla de forma dinamica correspondiente al numero del nivell pasado por paramentro.
 * @param {Integer} x 
 * @param {Integer} y 
 */
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
/**
 * Lanzador de funciones en cascada para el funcionamiento del juego.
 */
function startGame() {
    off();
    playCelesCorrectes(celesCorr);
}