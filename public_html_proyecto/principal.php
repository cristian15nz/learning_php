<?php

session_start();
require "app/conexion.php";

// Si el usuario no está logeado
if (isset($_SESSION['usuario_id']) == false) {
    // REDIRECCIONAR al login
    header("Location: login.php");
}

echo "Bienvenido {$_SESSION['usuario_nombre']}";

echo "<a href='logout.php'>Cerrar sesion</a>";

// Incluir la vista
require "app/vistas/principal.vista.php";