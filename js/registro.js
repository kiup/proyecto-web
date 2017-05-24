/**
 * Created by Milka on 23/05/2017.
 */
function mostrarTalleresViernes(){
    var valueInput = document.getElementById("pase_viernes");
    if( valueInput.value!= 0){
        document.getElementById("viernes").style.display = "inline";
    }else{
        document.getElementById("viernes").style.display = "none";
    }
}

function mostrarTalleresSabado(){
    var valueInput = document.getElementById("pase_sabado");
    if( valueInput.value!= 0){
        document.getElementById("sabado").style.display = "inline";
    }else{
        document.getElementById("sabado").style.display = "none";
    }
}

function mostrarTalleresDomingo(){
    var valueInput = document.getElementById("pase_domingo");
    if( valueInput.value!= 0){
        document.getElementById("domingo").style.display = "inline";
    }else{
        document.getElementById("domingo").style.display = "none";
    }
}

function calcularCostoTotal() {
    var pase_viernes = document.getElementById('pase_viernes');
    var pase_sabado = document.getElementById('pase_sabado');
    var pase_domingo = document.getElementById('pase_domingo');

    var camisa = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');
    var regalo = document.getElementById('regalo');

    if(regalo.value == ''){
        alert("Debes elegir un regalo");
        regalo.focus();
    }else{
        var boletos_viernes = parseInt(pase_viernes.value)||0;
        var boletos_sabado = parseInt(pase_sabado.value)||0;
        var boletos_domingo = parseInt(pase_domingo.value)||0;
        var cantCamisas = parseInt(camisa.value)||0;
        var cantEtiquetas = parseInt(etiquetas.value)||0;

        var totalPagar = (boletos_viernes * 300) +(boletos_sabado * 500) + (boletos_domingo * 400) +
            ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

        document.getElementById('total-pagar').innerHTML = totalPagar;
    }
}
