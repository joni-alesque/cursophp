<?php
    /*
        Crea un formulario llamado "Mi recarga online",
        En donde se tengan los siguientes campos :         
        > Nombre de Cliente.
        > Direccion.
        > Nro DNI.
        > Compañia de telefono (Claro,Movistar y Bitel).
        > Finalmente Saldo a recargar (3,5 y 10 soles).
        > Nro Telefono

        Al seleccionar el botón "Recargar" se debe enviar los datos por un metodo POST.
        Con PHP recibir los datos ingresados en el formularios.
        
        Si alguno de los campos se encuentra en blanco se debe mostrar un mensaje indicando el siguiente mensaje : "El campo (nombre del campo) fue enviado en blanco"
        y finalizar el funcionamiento.

        Validar que el nro de telefono solo tenga 9 caracteres, si no se cunple se debe mostrar un mensaje indicando el siguiente mensaje : "El nro de telefono debe tener 9 numeros." 
        y finalizar el funcionamiento.

        Si el nro de Telefono es 987654321 se debe mostrar un mensaje indicando el siguiente mensaje : "No se puede realizar la recarga, ingrese otro numero" 
        y finalizar el funcionamiento.
        
        Con la función realizar_recargar($compania,$recarga_soles) se debe programar dentro la siguiente funcionalidad,

        > Debe recibir dos parametros (nombre de la compania y la recarga soles).
        > La funcion debe regresar un monto a pagar.
        > Si la compania seleccionada es Claro y la recarga es mayor a 5 soles el monto a pagar debe tener un 30 % de descuento.
        > Si la compania seleccionada es Bitel y la recarga es de 10 soles el monto a pagar tiene un descuento de 3 soles.
        > Si la compania seleccionada es Movistar y la recarga es de menor a 5 soles el monto a pagar debe tener un descuento del 2%.        

        Finalmente con el monto a pagar guardado en una variable generar el siguiente mensaje : 
        "Hola (nombre del cliente),
        El monto  a pagar por tu recarga es de (monto a pagar con formato de moneda en soles).
        
        Detalles del cliente.
        --
        Direccion : (direccion)
        DNI : (dni)
        Compania : (compania)
        Nro telefono : (nro telefono)
        Saldo a recargar : (saldo a recargar)
        Monto a pagar : (monto a pagar)
        "
    
    */

    require '05_funciones.php';
    // validamos si enviamos el post    
    if(isset($_POST['submit'])){
        /*
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';       
        */
        $nombre_completo = $_POST['nombre_completo'];
        $direccion = $_POST['direccion'];
        $dni = $_POST['dni'];
        $compania = $_POST['compania'];
        $nroTelefono = $_POST['nroTelefono'];
        $recarga_soles = isset($_POST['recarga_soles']) ? $_POST['recarga_soles'] : '';

        $array_campos_en_blancos = array();

        if(!isset($nombre_completo) || $nombre_completo == ''){
            array_push($array_campos_en_blancos,'Nombre');
        }
        if(!isset($direccion) || $direccion == ''){
            array_push($array_campos_en_blancos,'Direccion');
        }
        if(!isset($dni) || $dni == ''){
            array_push($array_campos_en_blancos,'Nro. DNI');
        }
        if(!isset($nroTelefono) || $nroTelefono == ''){
            array_push($array_campos_en_blancos,'Nro Telefono');
        }
        if(!isset($recarga_soles) || $recarga_soles == ''){
            array_push($array_campos_en_blancos,'Recarga');
        }

        if(count($array_campos_en_blancos) > 0){
            array_map('mensaje_campo_vacio',$array_campos_en_blancos);
        }else{
            if(strlen($nroTelefono) != 9 ){
                echo "El nro de telefono debe tener 9 numeros.";
            }else{
                if($nroTelefono == 987654321){
                    echo "No se puede realizar la recarga, ingrese otro numero</br>";
                }else{
                    $monto_pagar =  realizar_recarga($compania,$recarga_soles);
                    echo 
                       "Hola $nombre_completo,</br>
                        El monto  a pagar por tu recarga es de $monto_pagar.</br>            
                        </br>
                        Detalles del cliente.</br>
                        --</br>
                        Direccion : $direccion</br>
                        DNI : $dni</br>
                        Compania : $compania</br>
                        Nro telefono : $nroTelefono</br>
                        Saldo a recargar : $recarga_soles</br>
                        Monto a pagar : $monto_pagar</br>
                        ";
                } 
            }
        }        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html5 | ejemplo</title>
</head>
<style>    
    body{
        background-color:#f7f1f0;
    }
    *{
        font-family: verdana;
    }
    #cuerpo{
        padding: 50px;
        margin : 0 auto;
        margin-top: 20px;
        width:600px;
        height:auto;
        background-color:#fff;
        border-radius:10px;
        -webkit-box-shadow: -10px 13px 27px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: -10px 13px 27px -6px rgba(0,0,0,0.75);
        box-shadow: -10px 13px 27px -6px rgba(0,0,0,0.75);
    }
    input,select{
        width : 100%;
    }
</style>
<body>    
    <div id="cuerpo">        
        <h4 style="text-align:center;">Mi Recarga Online</h4>
        <form action="" method="POST">
                Cliente :
                <input type="text" name="nombre_completo" id="nombre_completo" >
                <br>
                <br>
                Dirección :                
                <input type="text" name="direccion" id="direccion">
                <br>
                <br>
                DNI :                
                <input type="text" name="dni" id="dni">
                <br>
                <br>
                Compañía de Teléfono :                
                <select name="compania" id="compania">
                    <option value="Claro">Claro</option>
                    <option value="Movistar">Movistar</option>
                    <option value="Bitel">Bitel</option>
                </select>
                <br>
                <br>
                Nro Teléfono :                
                <input type="number" name="nroTelefono" id="nroTelefono">
                <br>
                <br>
                Saldo a recargar :                
                <input type="radio" name="recarga_soles" id="rbtn_3" value="3">S /. 3 
                <input type="radio" name="recarga_soles" id="rbtn_5" value="5">S /. 5
                <input type="radio" name="recarga_soles" id="rbtn_10" value="10">S /. 10
                <br>
                <br>
                <br>
                <input type="submit" name="submit" value="Recargar">
        </form>
    </div>    
</body>
</html>