<?php 
    /**
     * CREANDO FUNCIONES EN PHP
     */

    function realizar_recarga($compania, $recarga){
        $resultado = -1;

        if($compania == "Claro" && $recarga > 5){
            $resultado = $recarga*0.7;
        }else if($compania == "Bitel" && $recarga == 10){
            $resultado = $recarga - 3;
        }else if($compania == "Movistar" && $recarga < 5){
            $resultado = $recarga*0.8;
        }

        return $resultado;
    }

    function mensaje_campo_vacio($nombre_campo){
        echo "El campo $nombre_campo fue enviado en blanco.</br>";
    }
     
?>