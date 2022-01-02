<?php

/* Escribir un programa que añada valores a un array mientras que su longitud sea
menor a 120. Mostarlo por pantalla */

$numeros = [];
$aleatorio = rand(1, 500);

for ($i = 0; $i < 120; $i++) {
    array_push($numeros, $aleatorio);
}

var_dump($numeros);
