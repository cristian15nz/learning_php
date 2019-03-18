<?php

// Iniciar sesion
session_start();
require "app/conexion.php";

// Si el usuario está logeado no puede ver esta página
if(isset($_SESSION['usuario_id']) == true) {
    // REDIRECCIONAR a la pagina principal
    header("Location: principal.php");
}

$mensajesError = array();

//
// Verificar si el inputUser existe
if (isset($_POST['inputUser'])) {
    $datosUsuario = array(
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );

    // Preparar el query
    $sql = 'SELECT * FROM usuarios WHERE username = :username ';
    $comando = $conexion->prepare($sql);

    // Asociar el :username con el valor
    $comando->bindParam(":username", $datosUsuario['username']);

    // Ejecutar el query
    $comando->execute();

    // Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    $cantidadRegistros = count($resultado);

    if ($cantidadRegistros > 0) {
        // Verificar la contrasena del usuario
        $contrasena = $datosUsuario['password']; // La contraseña que el usuario envia
        $hash = $resultado[0]['password']; // Contrasena del base de datos (encriptada)
        if (password_verify($contrasena, $hash)) {
            // die('Bienvenido');
            $_SESSION['usuario_id'] = $resultado[0]['id'];
            $_SESSION['usuario_nombre'] = $resultado[0]['nombre'];
            $_SESSION['usuario_username'] = $resultado[0]['username'];

            header("Location: principal.php");
        } else {
            // Almancenar un mensaje de error para mostrarlo al usuario
            $mensajesError['usuario_incorrecto'] = "La contraseña es incorrecta";
        }

    } else {
        // Almancenar un mensaje de error para mostrarlo al usuario
        $mensajesError['usuario_incorrecto'] = "El usuario o la contraseña son incorrectos";
    }

}

$titulo = "XtudioPlay - Iniciar sesión";

require "app/vistas/login.vista.php"; 
