<?php

    // VARIABLES EN PHP
    // Se representan con el signo de dolar "$", las variables son case sensitive (diferencias entre minísculas y mayúsculas)
    // 
    static $_SALTO = "</br>";
    // variables simples ======================

    echo '-----VARIABLES-SIMPLES-------------------'.$_SALTO;

    // Boolean
    $var_boolean = true;
    echo $var_boolean.$_SALTO;
    // Integer
    $var_integer = 1;
    echo $var_integer.$_SALTO;
    // Float
    $var_float = 3.2;
    echo $var_float.$_SALTO;
    // String
    $var_string = "esta es una variables string".$_SALTO;
    echo $var_string;
    // Date
    $var_date = date("d/m/Y");
    echo $var_date.$_SALTO;
    // variables de tipo compuesto ===============

    // Object
    class MiObjeto{
        public $propiedad1 = 'propiedad 1';
        public $propiedad2 = 'propiedad 2';
    }

    $instancia = new MiObjeto;
    echo $instancia->propiedad1.$_SALTO;
    echo $instancia->propiedad2.$_SALTO;
    // Array
    $var_array = array(1,2,3,4);
    echo $var_array[0].$_SALTO;
    // Datetime
    $var_datetime = new Datetime('NOW');
    echo $var_datetime->format('d/m/Y').$_SALTO;

    // variables Especiales ===============
    
    // Null
    $var_null = null;
    echo $var_null;

    //Resources (Conexiones a base de datos / Respuestas Html)

    //-----------

    // FORMAS DE IMPRIMIR VARIABLES

    $var_nombre = "José";
    $var_edad   = 20;
    $var_direccion = "Mi casa 123";
    $var_arrayCarrera = array("Programador","Abogado");
    // $1variable = "hola"; => forma incorrecta de declarar variables

    echo "Hola mi nombre es {$var_nombre} tengo {$var_edad} años y vivo en {$var_direccion}".$_SALTO;
    echo "Hola mi nombre es $var_nombre tengo $var_edad años y vivo en $var_direccion".$_SALTO;
    echo "Hola mi nombre es $var_nombre tengo $var_edad años y vivo en $var_direccion, soy un $var_arrayCarrera[1]".$_SALTO;
    echo "Hola mi nombre es $var_nombre tengo $var_edad años y vivo en $var_direccion, soy un $var_arrayCarrera[1]".$_SALTO;

?>