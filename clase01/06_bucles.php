<?php
    /*
    *   BUCLES EN PHP
    */

    //FOR
    $contador = 0;
    for($i = 0; $i < 10; $i++){
        echo "El contador para el FOR está en $contador</br>";
        $contador++;
    }
    echo '</br>';
    echo '</br>';
    echo '</br>';
    //WHILE
    $valor = true;
    $contador_while = 0;
    while($valor){
        echo "El contador para el WHILE está en $contador_while</br>";
        $contador_while++;
        if($contador_while == 3){
            $valor = false;
        }
    }
    //DO WHILE
    $contador_dowhile = 1;
    $valor_dowhile = true;
    do{
        echo "El contador para el WHILE está en $contador_while</br>";        
        if($contador_dowhile == 5){
            $valor_dowhile = false;
        }
        $contador_dowhile++;
    }while($valor_dowhile);

    echo '</br>';
    echo '</br>';
    echo '</br>';

    //FOREACH
    $var_array = array("Jose","David","Josue","Alvaro","Raul","Miguel","Carlos");
    foreach($var_array as $key => $nombre){
        echo "key : $key - nombre :$nombre </br>";
    }

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
        array(
            'nombre_completo'=>array(
                                        'nombres'=> 'Maria',
                                        'apellido_paterno'=> 'Tudela',
                                        'apellido_materno'=> 'Rosales'
                                    ),
            'domicilio'=>array(
                                        'Provincia'=> 'Lima',
                                        'Distrito'=> 'Villa el Salvador'
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
                                        'nombres'=> 'Cristopher',
                                        'apellido_paterno'=> 'Armas',
                                        'apellido_materno'=> 'Claros'
                                    ),
            'domicilio'=>array(
                                        'Provincia'=> 'Lima',
                                        'Distrito'=> 'San Juan de Lurigancho'
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
                                        'nombres'=> 'Hardi',
                                        'apellido_paterno'=> 'Manrique',
                                        'apellido_materno'=> 'Hurtado'
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
                                        'nombres'=> 'Willy',
                                        'apellido_paterno'=> 'Rex',
                                        'apellido_materno'=> 'De luque'
                                    ),
            'domicilio'=>array(
                                        'Provincia'=> 'Lima',
                                        'Distrito'=> 'San Martin'
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
                                        'nombres'=> 'Samuel',
                                        'apellido_paterno'=> 'de Luque',
                                        'apellido_materno'=> 'Blanco'
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
    );

    echo '<pre>';
    foreach($arr_multi_personas as $key => $persona){
        echo $key.' - '.$persona['nombre_completo']['nombres'].'</br>';
    }
    echo '</pre>';
?>