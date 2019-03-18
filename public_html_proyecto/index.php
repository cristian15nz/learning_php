<?php
session_start();

require "app/mis_funciones.php";

$titulo = "XtudioPlay";

require "app/vistas/index.vista.php";
require vista("index");
