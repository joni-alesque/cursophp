<?php
/* 1. Analizar dos variables y decir cual es el mayor o si son iguales.
 */
$variable1 = 1;
$variable2 = 2;
echo 'Ejercicio 1 </br>';
if($variable1 > $variable2){
    echo "$variable1 es mayor que $variable2</br>";
}else{
    echo "$variable2 es mayor que $variable1</br>";
}
echo '</br>';
echo '</br>';
/* 2. Ordenar en orden ascendente los valores en el siguiente array
 */
    echo 'Ejercicio 2 </br>';
    $array_numeros = array(88,10,65,0,96,3);
    sort($array_numeros);
    foreach($array_numeros as $nro){
        echo $nro.'</br>';
    }
    echo '</br>';
    echo '</br>';
/* 3. Analizar un número e indicar si es positivo o negativo
*/
    echo 'Ejercicio 3 </br>';
    $valor_analizar = -2;
    if($valor_analizar > 0){
        echo 'Es positivo</br>';
    }else{
        echo 'Es negativo</br>';
    }
    echo '</br>';
    echo '</br>';
/* 4. Sumar los valores dentro de un array de numeros y obtener el promedio
*/
    echo 'Ejercicio 4 </br>';
    $array_valores_numericos = array(25,30,52,52);
    //$array_valores_numericos = array(25,25,25,25);
    $promedio = array_sum($array_valores_numericos)/count($array_valores_numericos);
    echo 'Promedio es : '.$promedio;
    echo '</br>';
    echo '</br>';
/* 5. Se tiene la variable "posicion" y un array de personas.

    . Si la variable posicion es igual a "primero", se tiene que imprimir el primer registro de
      personas en.
    . Si  la variable posicion es igual "ultimo", se tiene que  imprimir el último registro de
      personas en.
    . si la variable posicion es un numero se debe obtener el registro en base a la posicion dada y
      de no existir la posicion se debe devolver un mensaje de error.
    
 */
    echo 'Ejercicio 5 </br>';
    echo '</br>';
    $arr_multi_personas = array(
        array(
                'nombre_completo'=>array(
                                            'nombres'=> 'Jose Antonio',
                                            'apellido_paterno'=> 'Alvino',
                                            'apellido_materno'=> 'Velasque'
                                        ),
                'domicilio'=>array(
                                            'Provincia'=> 'Lima',
                                            'Distrito'=> 'Punta Hermosa'
                                        ),
                'edad' => 21,                                                
                'nacionalidad' => 'Peruana',
                'documento_entidad' => array(
                                                'tipo' => 'DNI',
                                                'nro_documento' => '457875115'
                                            )
            ),
        array(
                'nombre_completo'=>array(
                                            'nombres'=> 'David',
                                            'apellido_paterno'=> 'Vallejos',
                                            'apellido_materno'=> 'Salazar'
                                        ),
                'domicilio'=>array(
                                            'Provincia'=> 'Lima',
                                            'Distrito'=> 'Surco'
                                        ),
                'edad' => 42,                                                
                'nacionalidad' => 'Peruana',
                'documento_entidad' => array(
                                                'tipo' => 'DNI',
                                                'nro_documento' => '007751415'
                                            )
        ),
    );    
    $posicion = 13;
    echo '<pre>';
    //echo gettype($posicion == 'string');
    if(gettype($posicion) == 'string'){
        switch($posicion){
            case 'primero' : 
                print_r($arr_multi_personas[0]);
                break;
            case 'ultimo' : 
                print_r($arr_multi_personas[count($arr_multi_personas)-1]);
                break;
            default :
                echo 'NO SE RECONOCE EL VALOR '.$posicion;
                break;
        }
    }else if(gettype($posicion) == 'integer'){
        if($posicion < count($arr_multi_personas)){
            print_r($arr_multi_personas[$posicion]);
        }else{
            echo 'NO EXISTE EL VALOR '.$posicion;
        }
    }else{
        echo $posicion.' NO SE RECONOCE.';
    }
    echo '</pre>';
    echo '</br>';
    echo '</br>';
?>