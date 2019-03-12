<?php

$conexion = new PDO('mysql:host=127.0.0.1;dbname=usuarios', 'root', '');

$sql = "SELECT * FROM usuarios";

try {
    $query = $conexion->prepare($sql);

    $query->execute();

    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_export($usuarios);
    echo "</pre>";
} 
catch(PDOException $e) {
    echo $e->getMessage();
}