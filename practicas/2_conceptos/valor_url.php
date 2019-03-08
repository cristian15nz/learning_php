<?php

$nombre = $_GET["nombre"];

echo $nombre . "<br><br>";

var_dump($nombre);

$edad = $_GET["edad"];
echo "Tu edad es: " . $edad;
echo "<hr>";

var_dump($edad);


echo "<hr>";
$poseeCasa = true;

echo "Posee casa: " . $poseeCasa;
echo "<br>";
var_dump($poseeCasa);

echo "<hr>";


echo "El valor del pais es: ";
echo $_GET["pais"];

echo "<pre>";
var_dump($_GET);
echo "</pre>";