<?php
    /**
     * 
     * CONDICIONALES
     * 
    */

    //IF, ELSE
/*
    if(){

    }else if{

    }else{

    }
*/
    // IGUAL QUE
    $valor01 = 1;
    $valor02 = 1;
    $valor03 = 3;
    $valor04 = 10;
    
    if($valor01 == $valor02){
        echo "$valor01 y $valor01 son iguales.</br>";
    }else{
        echo "Los números son iguales.";
    }
    // MENOR QUE

    if($valor02 < $valor03){
        echo "El nro $valor02 es menor que el nro $valor03</br>";
    }else{
        echo "El nro $valor02 es NO menor que el nro $valor03</br>";
    }
    // MAYOR QUE
    if($valor04 > $valor03){
        echo "El nro $valor04 es mayor que el nro $valor03</br>";
    }else{
        echo "El nro $valor04 es NO mayor que el nro $valor03</br>";
    }
    // DIFERENTE QUE 
    if($valor04 != $valor03){
        echo "El nro $valor04 es diferente al nro $valor03</br>";
    }else{
        echo "Los números son iguales</br>";
    }
    // CONDICIONAL TERNARIO
    echo $valor01 == $valor02 ? "los valores son iguales" : "los valores son diferentes";
    
    //SWITCH CASE
/*
    switch(valor){
        case '':
            break;
        case '':
            break;
        case '':
            break;
        default:
            break;
    }
*/
    $valor_switch = "saludo";
    //$valor_switch = "despedida";

    switch($valor_switch){
        case "saludo" :
            echo "Se va a imprimir un saludo.</br>";
            break;
        case "despedida" :
            echo "Se va a imprimir una despedida.</br>";
            break;
        default :
            echo "No se reconoce el valor.</br>";
            break;
    }

?>
