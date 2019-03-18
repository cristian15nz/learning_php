<?php

session_start();
require "app/mis_funciones.php";

// Si el usuario está logeado no puede ver esta página
if (isset($_SESSION['usuario_id']) == true) {
    // REDIRECCIONAR a la pagina principal
    header("Location: principal.php");
}

$titulo = "XtudioPlay";

require vista("index");
