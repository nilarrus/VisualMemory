


function generarTables(x,y,src) {
    //seleccionamos la tabla
    var tlb = document.getElementById("table");
    //creamos el elemento tbody
    var tblBody = document.createElement("tbody");

    //creacion de las celdas
    for(var row=0; row<x; row++){
        var r = document.createElement("tr");

        for(var col = 0; col<y; col++){

            var cell = document.createElement("td");
            var img = document.createElement("img");
            img.setAttribute("src",src);
            img.setAttribute("width","70px");
            img.setAttribute("height","70px");
            img.setAttribute("alt","");

            var att = document.createAttribute("class");
 
            att.value="celda";
            cell.setAttributeNode(att);
            cell.appendChild(img);
            r.appendChild(cell);

        }
        //añadimos el contenido al body
        tblBody.appendChild(r);
    }
    // añadimos el tbody dentro de la tabla
    tlb.appendChild(tblBody);
}

function startGame(params) {
    off();
    playTime();
    lauchLevel();
}