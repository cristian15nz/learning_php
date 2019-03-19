<?php

session_start();
require "app/mis_funciones.php";
require "app/conexion.php";


try {
    // 1. Conectarnos a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);

    // 2. Preparar el SQL (query)
    $sql = "SELECT * FROM usuarios";
    $comando = $conexion->prepare($sql);

    // 3. Ejecutar el SQL (query)
    $comando->execute();

    // 4. Traer los datos
    $usuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$mensaje = "";
try {
    if (isset($_POST['inputName'])){

        $datosUsuarios = array(
            'nombre' => $_POST['inputName'],
            'correo' => $_POST['inputEmail'],
            'username' => $_POST['inputUser'],
            'password' => password_hash($_POST['inputPassword'], PASSWORD_DEFAULT)
        );

        // Validar que el usuario/correo no existan en la base de datos
        $usuariosRegistrados = comprobarUsuarioExiste($conexion, $datosUsuarios['correo'], $datosUsuarios['username']);
        $cantidadUsuariosRegistrados = count($usuariosRegistrados);

        imprimir($cantidadUsuariosRegistrados);

            if ($cantidadUsuariosRegistrados >= 1) {
                // Hay usuarios registrados con ese correo o username
                throw new Exception("Usuario o correo existentes.");
            } 

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
                header("Location: login.php");
            } else {
                echo "No se insertaron los datos";
            }
        }

    }
    
}catch(Exception $exception) {
    $mensaje = $exception->getMessage();
}

$titulo = "XtudioPlay - Registrarse";

require vista("registro");
