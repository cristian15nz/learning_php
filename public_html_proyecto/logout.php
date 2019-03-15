<?php

session_start();

// Limpiar el array $_SESSION;
$_SESSION = array();

session_destroy();

header("Location: index.php");