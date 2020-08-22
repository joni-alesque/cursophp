<?php 
    /**
     * CREANDO FUNCIONES EN PHP
     */

    function imprimir_nombre(){
        echo 'Vamos a imprimir un nombre.';
    }
     
    function imprimir_nombre_parametro($nombre="Nombre por defecto"){
        echo "Mi nombre es $nombre.";
    }

    function saludo($nombre="Nombre por defecto",$edad=0){
        return "Hola $nombre, tienes $edad años.";
    }

    function saludo_formulario($nombre="Nombre por defecto",$apellido="Apellido por defecto"){
        return "Hola $nombre, $apellido.";
    }

    function operacion_matematica($valor1,$valor2,$accion){
        $result = 0;
        if($accion == "suma"){
            $result = $valor1 + $valor2;
        }else if($accion == "resta"){
            $result = $valor1 - $valor2;
        }else{
            $result = "no se reconoce el valor";
        }
        return $result;
    }
/*
    imprimir_nombre();
    echo '</br>';
    imprimir_nombre_parametro();
    echo '</br>';
    echo saludo("José Antonio",19);
    echo '</br>';
    echo 'Operacion '.operacion_matematica(1,2,"suma");*/
?>