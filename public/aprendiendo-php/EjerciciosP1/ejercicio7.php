<?php

/* Haz un programa que muestre todos los números IMPARES entre dos números que
nos lleguen por la URL ($_GET) */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            if ($i % 2 != 0) {
                echo "<h3>$i IMPAR</h3>";
            } else {
                echo "<h3>$i PAR</h3>";
            }
        }
    } else {
        echo "<h3>El número 1 debe ser menor que el número 2</h3>";
    }
} else {
    echo "<h3>Los parámetros GET no existen</h3>";
}