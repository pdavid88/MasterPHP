<?php

/* Recoger dos números por la URL (parámetro GET) y hacer todas las
operaciones básicas de una calculadora de esos dos números */

if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo '<h1>Calculadora:</h1>';
    echo 'Suma: '.($num1+$num2).'</br>';
    echo 'Resta: '.($num1-$num2).'</br>';
    echo 'Multiplicación: '.($num1*$num2).'</br>';
    echo 'División: '.($num1/$num2);

} else {
    echo '<h1>Introduce correctamente los valores por la URL</h1>';
}