<?php

session_start();
require "app/mis_funciones.php";
require "app/conexion.php";

// Si el usuario no está logeado
if (isset($_SESSION['usuario_id']) == false) {
    // REDIRECCIONAR al login
    header("Location: login.php");
}

// Traer las publicaciones
$listadoPublicaciones = selectPublicacionesDelUsuario($conexion, $_SESSION['usuario_id']);

$titulo = "XtudioPlay - Página principal";

require vista("principal");
