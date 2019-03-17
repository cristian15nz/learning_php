<?php

session_start();
require "app/conexion.php";

// 2. Preparar el SQL (query)
$sql = "SELECT * FROM usuarios";
$comando = $conexion->prepare($sql);

// 3. Ejecutar el SQL (query)
$comando->execute();

// 4. Traer los datos
$usuarios = $comando->fetchAll();

if (isset($_POST['inputName'])) {

    $datosUsuarios = array(
        'nombre' => $_POST['inputName'],
        'correo' => $_POST['inputEmail'],
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );

    // Validar 
    if (false) {
    } else {
        // Enviar los datos
        // 1. Preparar el SQL (query)
        $sqlInsert = "INSERT INTO usuarios(nombre, correo, username, password)
                VALUES (:nombre, :correo, :username, :password)";
        $comando = $conexion->prepare($sqlInsert);

        // 2. Ejecutarlo
        $respueta = $comando->execute($datosUsuarios);

        if ($respueta == true) {
            // Redireccionar a la pagina del login
            header("Location: /login.php");
        } else {
            echo "No se insertaron los datos";
        }
    }
}

$titulo = "XtudioPlay - Registrarse";

require "app/vistas/registro.vista.php";
