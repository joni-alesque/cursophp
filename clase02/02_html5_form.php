<?php
    require '01_funciones.php';
    // validamos si enviamos el post    
    if(isset($_POST['submit'])){
        /*echo '<pre>';
        print_r($_POST);
        echo '</pre>';*/
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        echo saludo_formulario($nombre,$apellido);
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
    *{
        font-family: verdana;
    }
    #cuerpo{
        padding: 50px;
        margin : 0 auto;
        margin-top: 100px;
        width:600px;
        height:auto;
        background-color:#f7f1f0;
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
    <!-- TIPOS DE CONSULTAS EN EL FORM
            POST : GUARDAR
            GET : OBTENER DATA
            PUT : EDITAR
            DELETE : ELIMINAR
         -->
    <h4 style="text-align:center;">Mi formulario</h4>
    <div id="cuerpo">        
        <form action="" method="POST">
                Nombre :
                <input type="text" name="nombre" id="nombre" >
                <br>
                <br>
                Apellido :                
                <input type="text" name="apellido" id="apellido">
                <br>
                <br>
                Edad :                
                <input type="number" name="edad" id="edad">
                <br>
                <br>
                <br>
                Sexo :                
                <select name="sexo" id="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <br>
                <br>
                Estado civil :                
                <input type="radio" name="estado_civil" id="rbtn_soltero" value="Soltero">Soltero
                <input type="radio" name="estado_civil" id="rbtn_casado" value="Casado">Casado
                <input type="radio" name="estado_civil" id="rbtn_divorciado" value="Divorciado">Divorciado
                <br>
                <br>
                <br>
                <input type="submit" name="submit" value="Guardar">
        </form>
    </div>    
</body>
</html>
