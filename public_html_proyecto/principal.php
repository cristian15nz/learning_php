<?php

session_start();
require "app/conexion.php";
require "app/mis_funciones.php";

// Si el usuario no está logeado
if (isset($_SESSION['usuario_id']) == false) {
    // REDIRECCIONAR al login
    header("Location: login.php");
}

$titulo = "XtudioPlay - Página principal";

// Incluir la vista
require "app/vistas/principal.vista.php";