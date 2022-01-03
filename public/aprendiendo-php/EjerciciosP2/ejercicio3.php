<?php

/* Programa que compruebe si una variable está vacía y si lo está,
rellenarla con texto en minúscuilas y  mostrarlo en mayúsculas y negrita */

$texto = "";

if(empty($texto)) {
    $texto = "hola yo soy el relleno de la variable";
    $mayusculas = strtoupper($texto);

    echo "<strong>$mayusculas</strong>";
} else {
    echo $texto;
}
