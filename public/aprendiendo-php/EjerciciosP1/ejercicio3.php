<?php

/* Escribe un script que imprima por pantalla los cuadrados de los 40
primeros números naturales. Utiliza un bucle while */

$contador = 0;

while ($contador <= 40) {
    $cuadrado = $contador * $contador;
    echo 'El cuadrado de '.$contador.' = '.($cuadrado ** 2).'</br>';
    $contador++;
}