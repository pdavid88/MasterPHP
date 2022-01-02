<?php

/* Hacer un programa que tenga un array con 8 números enteros y que haga lo siguiente:
1- Recorrerlo y mostrarlo
2- Ordenarlo y mostrarlo
3- Mostrar su longitud
4- Buscar algún elemento (buscar el parámetro que me llegue por la URL)
*/

function mostarArray($numeros) {
    $resultado = "";

    foreach ($numeros as $numero) {
        // $resultado = $resultado.$numero."<br>";
        $resultado .= $numero."<br>";
    }
    return $resultado;
}

$numeros = [23,48,33,15,22,88,9,2];


echo "<h3>Recorrer y mostrar:</h3>";
echo mostarArray($numeros);


echo "<h3>Ordenar y mostrar:</h3>";
sort($numeros);
echo mostarArray($numeros);


echo "<h3>Mostrar longitud:</h3>";
echo count($numeros);


echo "<h3>Búsqueda en array:</h3>";
$busqueda = 22;
$search = array_search($busqueda, $numeros);
if(!empty($search)) {
    echo "<h4>El número buscado existe en el array, su índice es: $search</h4>";
} else {
    echo "<h4>El número buscado NO existe en el array</h4>";
}


echo "<h3>Búsqueda de un elemento por URL:</h3>";
if(isset($_GET['numero'])) {
    $busqueda2 = $_GET['numero'];
    $search2 = array_search($busqueda2, $numeros);
    if(!empty($search2)) {
        echo "<h4>El número buscado existe en el array, su índice es: $search2</h4>";
    } else {
        echo "<h4>El número buscado NO existe en el array</h4>";
    }
}
