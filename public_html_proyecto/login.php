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
        // die('Bienvenido');
        $_SESSION['usuario_id'] = $resultado[0]['id'];
        $_SESSION['usuario_nombre'] = $resultado[0]['nombre'];
        $_SESSION['usuario_username'] = $resultado[0]['username'];

         header("Location: principal.php");
    } else {
        // Almancenar un mensaje de error para mostrarlo al usuario
        $mensajesError['usuario_incorrecto'] = "El usuario o la contraseña son incorrectos";
    }

}

$titulo = "XtudioPlay - Iniciar sesión";

require "app/vistas/login.vista.php"; 
