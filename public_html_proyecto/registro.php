<?php

$titulo = "XtudioPlay - Registrarse";


$host = "127.0.0.1";
$dbname = "proyecto_db";
$user = "root";
$password = "";
$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Cambiar los valores para produccion
if ($_SERVER['SERVER_NAME'] == "xtudioplay.000webhostapp.com") {
    $host = "localhost";
    $dbname = "id8904345_proyecto_db";
    $user = "id8904345_cristian";
    $password = "aprendiendo_php";
}

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

require "app/vistas/registro.vista.php";
