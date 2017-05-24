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

function calcularMontos() {
    //Campos datos usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');
    //Campos pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_completo = document.getElementById('pase_completo');
    var pase_dos_dias = document.getElementById('pase_dos_dias');
    //Botones y divs
    var calcular = document.getElementById('calcular');
    var error_div = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var resultado = document.getElementById('lista-productos');
    //Extras
    var etiquetas = document.getElementById('etiquetas');
    var camisas = document.getElementById('camisa_evento');

    event.preventDefault();
    if(regalo.value===''){
        alert("Debes elegir un regalo");
        regalo.focus();
    }else{
        var boletosDia = parseInt(pase_dia.value, 10)||0;
        var boletos2Dias = parseInt(pase_dos_dias.value)||0;
        var boletosCompleto = parseInt(pase_completo.value)||0;
        var cantCamisas = parseInt(camisas.value)||0;
        var cantEtiquetas = parseInt(etiquetas.value)||0;

        var totalPagar = (boletosDia * 30) +(boletos2Dias * 45) + (boletosCompleto * 50) +
            ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

        var listadoProductos = [];
        if(boletosDia>=1){
            listadoProductos.push(boletosDia + 'Pases por día');
        }
        if(boletos2Dias>=1){
            listadoProductos.push(boletos2Dias + 'Pases por dos días');
        }
        if(boletosCompleto>=1){
            listadoProductos.push(boletosCompleto + 'Pases completos');
        }
        if(cantCamisas>=1){
            listadoProductos.push(cantCamisas + 'Camisas');
        }


    }
}