<?php
    require './04_calculadora_functions.php';

    // validamos si enviamos el post    
    if(isset($_POST['calcular'])){
        /*
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        */
        $operacion = $_POST['tipo_calculo'];
        $valor01 = $_POST['valor01'];
        $valor02 = $_POST['valor02'];
        $resultado  = null;
        $calcular   = $_POST['calcular'];
        switch($operacion){
            case "sumar":
                $resultado = sumar($valor01,$valor02);
                break;
            case "restar":
                $resultado = restar($valor01,$valor02);
                break;
            case "multiplicar":
                $resultado = multiplicar($valor01,$valor02);
                break;
            case "dividir":
                $resultado = dividir($valor01,$valor02);
                break;                
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Estilos de la aplicacion -->
    <link rel="stylesheet" href="./css/estilos.css">    
</head>
<body>
    <div class="cuerpo-calculadora">        
        <div class="cabecera-calculadora">
            <h4 class="align-baseline">CALCULADORA</h4>
        </div>
        <div class="pantalla-calculadora">
            <div class="pantalla-operacion">
                <h5 id="txtOperacion"><?= isset($_POST['calcular']) ? $calcular : '0' ?></h5>
            </div>
            <div class="pantalla-resultado">
                <h1 id="txtResultado"><?= isset($_POST['calcular']) ? $resultado : '0' ?></h1>
            </div>
        </div>
        <div class="seccion-botones">
            <div class="columna-botones">
                <div class="boton-calculadora" id="btnSuma">
                    <h1>+</h1>
                </div>
                <div class="boton-calculadora" id="btnResta">
                    <h1>-</h1>
                </div>
                <div class="boton-calculadora" id="btnMultiplicacion">
                    <h1>*</h1>
                </div>
                <div class="boton-calculadora" id="btnDivision">
                    <h1>/</h1>
                </div>
            </div>
            <div class="columna-botones">
                <div class="boton-calculadora" id="btnNro7">
                    <h1>7</h1>
                </div>
                <div class="boton-calculadora" id="btnNro8">
                    <h1>8</h1>
                </div>
                <div class="boton-calculadora" id="btnNro9">
                    <h1>9</h1>
                </div>
                <div class="boton-calculadora" id="btnNro0">
                    <h1>0</h1>
                </div>
            </div>
            <div class="columna-botones">
                <div class="boton-calculadora" id="btnNro4">
                    <h1>4</h1>
                </div>
                <div class="boton-calculadora" id="btnNro5">
                    <h1>5</h1>
                </div>
                <div class="boton-calculadora" id="btnNro6">
                    <h1>6</h1>
                </div>
                <div class="boton-calculadora" id="btnPunto">
                    <h1>.</h1>
                </div>
            </div>
            <div class="columna-botones">
                <div class="boton-calculadora" id="btnNro1">
                    <h1>1</h1>
                </div>
                <div class="boton-calculadora" id="btnNro2">
                    <h1>2</h1>
                </div>
                <div class="boton-calculadora" id="btnNro3">
                    <h1>3</h1>
                </div>
                <div class="boton-calculadora" id="btnBorrar">
                    <h1>Del</h1>
                </div>
            </div>
            <div class="columna-final">
                <div id="btnIgual">
                    <h1>=</h1>
                </div>
            </div>

            <section id="formulario-oculto">
                <form method="POST" id="frmCalculadora">
                    <input type="hidden" name="valor01" id="valor01">
                    <input type="hidden" name="valor02" id="valor02">
                    <input type="hidden" name="resultado" id="resultado">
                    <input type="hidden" id="operacion">                    
                    <input type="hidden" name="tipo_calculo" id="tipo_calculo">
                    <input type="hidden" name="calcular" id="calcular">
                </form>
            </section>

        </div>
    </div>
    <!-- FUNCIONALIDAD DE LA VISTA -->
    <script src="./js/calculadora.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
