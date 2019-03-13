<?php

$conexion = new PDO('mysql:host=127.0.0.1;dbname=proyecto_db', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM usuarios";

try {
    $query = $conexion->prepare($sql);

    $query->execute();

    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
} 
catch(PDOException $e) {
    echo $e->getMessage();
}