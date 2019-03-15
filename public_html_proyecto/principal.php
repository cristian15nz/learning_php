<?php

session_start();
require "app/conexion.php";

echo "Bienvenido {$_SESSION['usuario_nombre']}";

echo "<a href='logout.php'>Cerrar sesion</a>";

// Incluir la vista
require "app/vistas/principal.vista.php";