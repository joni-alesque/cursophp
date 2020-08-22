// VARIABLES DE LA CALCULADORA
const btnSuma           = document.getElementById('btnSuma');
const btnResta          = document.getElementById('btnResta');
const btnMultiplicacion = document.getElementById('btnMultiplicacion');
const btnDivision       = document.getElementById('btnDivision');
const btnNro7           = document.getElementById('btnNro7');
const btnNro8           = document.getElementById('btnNro8');
const btnNro9           = document.getElementById('btnNro9');
const btnNro0           = document.getElementById('btnNro0');
const btnNro4           = document.getElementById('btnNro4');
const btnNro5           = document.getElementById('btnNro5');
const btnNro6           = document.getElementById('btnNro6');
const btnPunto          = document.getElementById('btnPunto');
const btnNro1           = document.getElementById('btnNro1');
const btnNro2           = document.getElementById('btnNro2');
const btnNro3           = document.getElementById('btnNro3');
const btnIgual          = document.getElementById('btnIgual');
const btnBorrar         = document.getElementById('btnBorrar');


var txtOperacion        = document.getElementById('txtOperacion');
var txtResultado        = document.getElementById('txtResultado');

// VARIABLES DEL FORMULARIO
var frmCalculadora      = document.getElementById('frmCalculadora');
var valor01             = document.getElementById('valor01');
var valor02             = document.getElementById('valor02');
var resultado           = document.getElementById('resultado');
var operacion           = document.getElementById('operacion');
var tipo_calculo        = document.getElementById('tipo_calculo');
var calcular            = document.getElementById('calcular');

// FUNCIONES DE LOGICA DE LA VISTA
function seleccionarNumero(numero){    
    var actualOperacion = operacion.value;
    
    actualOperacion += numero; 
    
    if(operacion.value == ""){

        valor01.value += numero;  
        if(txtOperacion.textContent == "0"){
            txtOperacion.textContent = "";
        }
    
        txtOperacion.textContent += actualOperacion;

    }else{

        valor02.value += numero;
        txtOperacion.textContent += numero;
    }    
    
}

function seleccionarOperacion(operacionArealizar){
    
    if(operacion.value == ""){
        txtOperacion.textContent += operacionArealizar;
        operacion.value = operacionArealizar;
    }else{
        alert("se hará el cálculo");
    }    
}

function limpiarCalculadora(){
    valor01.value               = "";
    valor02.value               = "";    
    resultado.value             = "";
    operacion.value             = "";
    txtOperacion.textContent    = "0";  
    txtResultado.textContent    = "0";  
}

function realizarCalculo(){
    tipo_calculo.value  = obtenerTipoCalculo();
    calcular.value      = txtOperacion.textContent;
    frmCalculadora.submit();

}

function obtenerTipoCalculo(){
    
    var resultado = "";
    switch(operacion.value){
        case "+":
            resultado = "sumar";
            break;
        case "-":
            resultado = "restar";
            break;
        case "*":
            resultado = "multiplicar";
            break;
        case "/":
            resultado = "dividir";
            break;
    }
    return resultado;
}

// ASIGNANDO FUNCIONES
btnNro0.addEventListener('click', function(){
    seleccionarNumero("0");
});
btnNro1.addEventListener('click', function(){
    seleccionarNumero("1");
});
btnNro2.addEventListener('click', function(){
    seleccionarNumero("2");
});
btnNro3.addEventListener('click', function(){
    seleccionarNumero("3");
});
btnNro4.addEventListener('click', function(){
    seleccionarNumero("4");
});
btnNro5.addEventListener('click', function(){
    seleccionarNumero("5");
});
btnNro6.addEventListener('click', function(){
    seleccionarNumero("6");
});
btnNro7.addEventListener('click', function(){
    seleccionarNumero("7");
});
btnNro8.addEventListener('click', function(){
    seleccionarNumero("8");
});
btnNro9.addEventListener('click', function(){
    seleccionarNumero("9");
});
btnPunto.addEventListener('click', function(){
    seleccionarNumero(".");
});

btnSuma.addEventListener('click', function(){
    seleccionarOperacion("+");
});
btnResta.addEventListener('click', function(){
    seleccionarOperacion("-");
});
btnMultiplicacion.addEventListener('click', function(){
    seleccionarOperacion("*");
});
btnDivision.addEventListener('click', function(){
    seleccionarOperacion("/");
});

btnBorrar.addEventListener('click', function(){
    limpiarCalculadora();
});

btnIgual.addEventListener('click', function(){
    realizarCalculo();
});