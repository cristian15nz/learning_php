<?php

// Definir la URL BASE
define("URL_BASE", '/');

function imprimir($valor_recibido) {
    echo "<pre>";
    var_export($valor_recibido);
    echo "</pre>";
}

function vista($nombre) {
    return "app/vistas/$nombre.vista.php";
}

function selectPublicaciones($conexion) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM publicaciones");

    // 2. Ejecutar el query
    $comando->execute();

    // 3. Traer los datos
    $publicaciones = $comando->fetchAll(PDO::FETCH_ASSOC);

    return $publicaciones;
}