<?php

// Definir la URL BASE
define("URL_BASE", '/');

/* Mi funcion para mostrar los errores */
function manejoErrores($codigo, $mensaje, $archivo, $linea) {
    echo "<div class='alert alert-danger' role='alert'>
            <b>Ha ocurrido un error.</b>
            <div>
                <p><i>$mensaje</i></p>
                <p>Error en la linea <b>$linea</b> del archivo <b>$archivo</b></p>
            </div>
        </div>";
}

set_error_handler("manejoErrores");

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

function comprobarUsuarioExiste($conexion, $correo, $username) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM usuarios WHERE correo = '$correo' OR username = '$username'");

    // 2. Ejecutar el query
    $comando->execute();

    // 3. Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}