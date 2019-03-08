<?php

$nombre = $_GET["nombre"] ?? "Nombre";
$apellido = $_GET["apellido"] ?? "Apellido";
$edad = $_GET["edad"] ?? "Edad";
$ciudad = $_GET["ciudad"] ?? "Ciudad";

$color = $_GET["color"] ?? "white";

echo "<style>

body {
    background-color: $color;
    font-size: {$edad}px;
}

</style>";

// Mostrar un mensaje estatico
//echo "<p>Bienvenido Pedro Garcia, tienes 10 años y vives en California</p>";

// Mostrar un mensaje dinamico
// 1. El valor de la variable solo se muestra en comillas dobles.
echo "<p>Bienvenido $nombre $apellido, tienes $edad años y vives en $ciudad</p>";

// 1.1 El valor de la variable solo se muestra en comillas dobles encerradas en llaves.
//echo "<p>Bienvenido {$nombre} {$apellido}, tienes {$edad} años y vives en {$ciudad}</p>";

// 2. El valor de la variable NO se muestra en comillas simples.
//echo '<p>Bienvenido $nombre $apellido, tienes $edad años y vives en $ciudad</p>';

?>