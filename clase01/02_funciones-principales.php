<?php
    echo 'FUNCIONES PRINCIPALES EN PHP : '.'</br>';
    //echo
    echo 'Function echo'.'</br>';
    echo 'Para imprimir'.'</br></br>';
    //abs
    echo 'Function abs'.'</br>';
    echo abs(-1).'</br></br>';

    //round
    echo 'Function round'.'</br>';
    echo round(2.5).'</br>';
    echo round(2.447,3).'</br>';

    // Trim
    echo 'Function trim'.'</br>';
    echo "hola esto es un texto . ".'</br>';    

    // number format
    echo 'Function trim'.'</br>';
    echo number_format(200000, 2, '.', ',').'</br>';

    // strlen
    echo 'Function strlen'.'</br>';
    echo 'Tamaño de mi palabra hola es '.strlen("hola").'</br>';

    //substr
    echo 'Function substr'.'</br>';
    echo substr("hola :D", 0,4).'</br>';

    //substr_compare
    echo 'Function substr'.'</br>';
    echo substr_compare("hola :D","hola", 0,4).'</br>';

    // rand : nos un número aleatorio

    echo 'Function rand'.'</br>';
    echo rand(1,10).'</br>';

    // explode
    echo 'Function explode'.'</br>';
    $palabra_separada = 'parte1 parte2 parte3 parte4 parte5 parte6 parte1'.'</br>';
    $separacion = explode(" ",$palabra_separada);
    echo $separacion[0].'</br>'; 

    // implode
    echo 'Function implode'.'</br>';
    $array_separado = array('parte1','parte2', 'parte3', 'parte4', 'parte5', 'parte6', 'parte1');
    $array_unido = implode(",",$array_separado);
    echo'<pre>';
    print_r($array_unido);
    echo'</pre>';
    //Extract
    $arr_variables = array(
                            "variable1"=>"valor de variable 1",
                            "variable2"=>"valor de variable 2.",
                        );
    extract($arr_variables);
    echo $variable1.'</br>';
    echo $variable2.'</br>';
    echo '</br>';

    //min
    echo 'Function min'.'</br>';
    echo min(2, 3, 1, 6, 7).'</br>';
    echo min("Palabra", 7).'</br>'; // String es considerado como 0
    $min_array = min(array(2, 2, 2), array(1, 1, 1, 1)); //Da como resultado el que tengo menos items
    echo '<pre>';
    print_r($min_array);
    echo '</pre>';
    $min_array = min(array(2, 2, 2), array(1, 1, 1)); //Cuando tiene la misma cantidad de items compara los valores
    echo '<pre>';
    print_r($min_array);
    echo '</pre>';
    echo '</br>';

    //max
    echo 'Function max'.'</br>';
    echo max(2, 3, 1, 6, 7).'</br>';
    echo max("Palabra", 7).'</br>'; // String es considerado como 0
    $min_array = max(array(2, 2, 2), array(1, 1, 1, 1));
    echo '<pre>';
    print_r($min_array);
    echo '</pre>';
    echo '</br>';

    echo '--'.'</br>';
    echo 'Parseando dato'.'</br>';                             
    $numero = "1";
    $otro_numero = "2";
    $numero_adicional = "2.5";
    $suma = (int) $numero + (int) $otro_numero;
    $suma_float = (float) $numero + (float) $numero_adicional;
    echo "Suma (int): $numero + $otro_numero = $suma </br>";                             
    echo "Suma (float): $numero + $otro_numero = $suma_float </br>";                             
    echo '--'.'</br>';

    $array_c = array("a","z","b","s");
    $array_number = array(9,10,54,6,1,100);
    //asort
    echo 'Function sort'.'</br>';    
    echo '</br>';
    //print_r($array).'</br></br>';
    sort($array_c);
    foreach($array_c as $letra){
        echo $letra;
        echo '</br>';
    }

    echo '</br>';
    echo 'Function rsort'.'</br>';
    echo '</br>';
    rsort($array_c);
    foreach($array_c as $letra){
        echo $letra;
        echo '</br>';
    }

    echo '</br>';
    echo 'Function array_search'.'</br>';
    echo '</br>';
    $key = array_search(6, $array_number);
    echo 'key : '.$key.'</br>';

    echo '</br>';
    echo 'Function count'.'</br>';
    print_r(count($array_c)).'</br></br>';
    echo '</br>';

    echo 'Function sum'.'</br>';
    print_r(array_sum($array_number)).'</br></br>';
    echo '</br>';

    echo 'Function json_encode'.'</br>';
    $array_asociativo = array(
                              "nombre"=>"Jose",
                              "apellido"=>"Alvino",
                              "edad"=>21
                             );
    echo json_encode($array_asociativo).'</br>';

    echo '</br>';
    

?>