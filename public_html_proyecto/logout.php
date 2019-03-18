<?php

session_start();
require "app/mis_funciones.php";

// Limpiar el array $_SESSION;
$_SESSION = array();

session_destroy();

header("Location: index.php");
die;