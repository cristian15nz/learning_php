<?php

// Definir los valores de la conexion a la base de datos
$db_host = "127.0.0.1";
$db_name = "proyecto_db";
$db_user = "root";
$db_pass = "";

// Cambiar los valores para producción
if ($_SERVER['SERVER_NAME'] == "xtudioplay.000webhostapp.com") {
    $db_host = "localhost";
    $db_name = "id8904345_proyecto_db";
    $db_user = "id8904345_cristian";
    $db_pass = "aprendiendo_php";
}

// Definir el modo de errores: Excepciones
// Definir el modo de traer datos: Array Asociativos
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

// Abrir una nueva conexión
$conexion = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass, $options);