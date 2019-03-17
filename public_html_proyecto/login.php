<?php

session_start();
require "app/mis_funciones.php";
require "app/conexion.php";

// Verificar si el inputUser existe
if (isset($_POST['inputUser'])) {
    $datosUsuario = array(
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );

    // Preparar el query
    $sql = 'SELECT * FROM usuarios WHERE username = :username AND password = :password ';
    $comando = $conexion->prepare($sql);

    // Ejecutar el query
    $comando->execute($datosUsuario);

    // Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    $cantidadRegistros = count($resultado);

    if ($cantidadRegistros > 0) {
        // 
        $_SESSION['nombre'] = "Cristian";

        // header("Location: principal.php ");
    } else {
        die('Usuario no existe');
    }

}


$titulo = "XtudioPlay - Iniciar sesión";

require vista("login");
