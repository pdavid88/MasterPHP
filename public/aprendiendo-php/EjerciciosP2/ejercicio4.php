<?php

/* Crear un script que tenga 4 variables (array, string, int, booleana) y que imprima
un mensaje según el tipo de variable que sea */

$array = [0,1,2];
$string = "Hola";
$int = 22;
$booleana = true;

if(is_array($array)) {
    echo "<h3>Es de tipo array</h3>";
}

if(is_string($string)) {
    echo "<h3>$string</h3>";
}

if(is_int($int)) {
    echo "<h3>$int</h3>";
}

if(is_bool($booleana)) {
    echo "<h3>El booleano es verdadero</h3>";
}