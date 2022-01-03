<?php

/* Crear un array con el contenido de la tabla:
ACCION     AVENTURA     DEPORTES
GTA        ASSASINS     FIFA
COD        CRASH        PES
PUGB       PRINCE OF    MOTO GP

Cada fila debe ir en un fichero separado (includes) */

$tabla = array(
    "ACCION" => array("GTA", "COD", "PUGB"),
    "AVENTURA" => array("ASSASINS", "CRASH", "PRINCE OF PERSIA"),
    "DEPORTES" => array("FIFA", "PES", "MOTO GP")
);

$categorias = array_keys($tabla);

?>

<table border="1">
    <?php require_once 'encaberzados.php'?>
    <?php require_once 'primera.php'?>
    <?php require_once 'segunda.php'?>
    <?php require_once 'tercera.php'?>
</table>
