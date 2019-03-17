<?php

function dump($valor) {
    echo "<pre>";
    var_dump($valor);
    echo "</pre>";
}

function redireccionar($url) {
    header("Location: $url");
    exit;
}

function vista($nombre) {
    return "app/vistas/$nombre.vista.php";
}