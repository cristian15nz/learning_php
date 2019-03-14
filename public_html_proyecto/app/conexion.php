<?php

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

$conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);