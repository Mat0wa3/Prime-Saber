let correctas = [];
let opcion_elegida = [];
let cantidad_correctas=0;
function respuesta(num_pregunta, seleccionada){
    if (seleccionada.value == 1) {
        correctas[num_pregunta] = seleccionada.name;
    }
    opcion_elegida[num_pregunta] = seleccionada.value;
    id = num_pregunta;
    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "White";
    labels[5].style.backgroundColor = "White";
    labels[7].style.backgroundColor = "White";
    labels[9].style.backgroundColor = "White";
    seleccionada.parentNode.style.backgroundColor = "#cec0fc";
}

function enviar(){
    cantidad_correctas = 0;
    for(i=0; i < correctas.length;i++){
        if(correctas[i]==opcion_elegida[i]){
            cantidad_correctas++;
        }
    }

    return document.getElementById("resultado").innerHTML = cantidad_correctas;
}