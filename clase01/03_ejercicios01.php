<?php
/*
 * 1. En base a una palabra imprimir la primera y la última letra, y su posición
 */
    echo 'Ejercicio 1</br>';
    echo '</br>';
    $mipalabra = "Paracaidas";
    echo 'Primera letra :'.substr($mipalabra,0,1).'</br>';
    echo 'Ultima letra :'.substr($mipalabra,strlen($mipalabra)-1,strlen($mipalabra)).'</br>';
    echo '</br>';
    $mipalabra_array = str_split($mipalabra);
    echo 'Primera letra :'.$mipalabra_array[0].'</br>';
    echo 'Ultima letra :'.$mipalabra_array[strlen($mipalabra)-1].'</br>';
    echo '</br>';
/* 2. Forma la siguiente frase "Hola mi nombre es...y vivo en.... ", utilizando comillas dobles.
 */
    echo 'Ejercicio 2</br>';
    echo '</br>';
    $nombre = "Jose";
    $distrito = "Punta Hermosa";
    echo "Hola mi nombre es $nombre y vivo en $distrito.";
    echo '</br>';
/* 3. Imprime la suma de las siguientes variables $var1 = "2"; $var2 = "8";
 */
    echo '</br>';
    echo 'Ejercicio 3</br>';
    echo '</br>';
    $var1 = "2"; $var2 = "8";
    $suma = (int)$var1 + (int)$var2;
    echo "La suma de $var1 + $var2 = $suma";
    echo '</br>';
    echo '</br>';
/* 4. Generar un número random del 50 al 100 y dividirlo para obtener la mitad
 */
    echo 'Ejercicio 4</br>';
    echo '</br>';
    echo rand(50,100)/2;
    echo '</br>';
    echo '</br>';
/* 5. Tranforma el siguiente array en una cadena de texto array("Buenos","días","mi","nombre","es","josé"),
 *    Separando las palabras con coma
*/
    echo 'Ejercicio 5</br>';
    echo '</br>';
    $array_palabras = array("Buenos","días","mi","nombre","es","josé");
    echo implode(" ",$array_palabras);
    echo '</br>';
?>