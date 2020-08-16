<?php

    /**
     * ARRAY 
     **/    

    // inicializando un array
    echo 'ARRAYS</br>';
    echo '</br>';
    $mi_array  = array();
    // Ingresando data    
    $mi_array[0] = "Jose";
    $mi_array[1] = "Antonio";
    $mi_array[2] = "Alvino";
    $mi_array[3] = "Velasque";

    $mi_nombre_completo = "Mi nombre completo es $mi_array[0] $mi_array[1] $mi_array[2] $mi_array[3]";
    echo $mi_nombre_completo.'</br>';

    $arr_fecha_nacimiento = array('21','09','1998');
    echo '<pre>';
    print_r($arr_fecha_nacimiento);
    
    //Array asociativo

    $arr_asociativo_fecha_nacimiento = array('dia'=>'21','mes'=>'09','anio'=>'1998');
    print_r($arr_asociativo_fecha_nacimiento);
    
    
    //Array multimensionales
    $arr_multi_persona = array(
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
                        );
    print_r($arr_multi_persona);
    echo "</br>";
    echo "Imprimiendo datos : </br>";
    echo "</br>";
    echo "El nombre de la persona es : ".$arr_multi_persona['nombre_completo']['nombres'].'</br>';
    echo "El apellido paterno de la persona es : ".$arr_multi_persona['nombre_completo']['apellido_paterno'].'</br>';
    echo "El apellido paterno de la persona es : ".$arr_multi_persona['nombre_completo']['apellido_materno'].'</br>';
    echo "La edad de la persona es : ".$arr_multi_persona['edad'].'</br>';
    echo "</br>";
    echo "</br>";
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
    print_r($arr_multi_personas);
    echo '<pre>';
?>