<?php
    /**
     * ACTIVIDAD 01
    **/

    /*
    * 1. En base a una palabra, validar si la cantidad de caracteres que tienes es par, si es par, imprimir la primera mitad de la palabra, si no,
         mostrar un mensaje indicando que no se puede imprimir.
    */
    /**
     *2.  Imprimir solo el dni de las personas del array $arr_multi_personas
     */
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
            'edad' => 41,                                                
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
            'edad' => 46,                                                
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
            'edad' => 19,                                                
            'nacionalidad' => 'Peruana',
            'documento_entidad' => array(
                                            'tipo' => 'DNI',
                                            'nro_documento' => '457875115'
                                        )
        ),        
    );

    /**
     *3.   Imprimir solo el listado de personas que tenga más de 40 años
    */
    /**
     *4.   Imprimir solo el listado de personas que viva en Surco
    */
?>