<?php

session_start();
require "app/mis_funciones.php";

// Limpiar el array $_SESSION;
$_SESSION = array();

// Destruir la sesion
session_destroy();

// Redireccionar al index
header("Location: index.php");
die;