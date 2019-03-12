<?php

// Crear arrays usando la palabra array
$frutas = array("Mango", "Pera");

echo $frutas[0];

// Array con los dias de la semana
$dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");

echo "<h3>Los dias de la semana son: </h3>";
echo $dias[0] . "<br>";
echo $dias[1] . "<br>";
echo $dias[2] . "<br>";
echo $dias[3] . "<br>";
echo $dias[4] . "<br>";
echo $dias[5] . "<br>";
echo $dias[6] . "<br>";

// Array con los meses del año, sin la palabra array
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

echo "<h3>Los meses del año son: </h3>";
echo $meses[0] . "<br>";
echo $meses[1] . "<br>";
echo $meses[2] . "<br>";
echo $meses[3] . "<br>";
echo $meses[4] . "<br>";
echo $meses[5] . "<br>";
echo $meses[6] . "<br>";
echo $meses[7] . "<br>";
echo $meses[8] . "<br>";
echo $meses[9] . "<br>";
echo $meses[10] . "<br>";
echo $meses[11] . "<br>";

// Recorrer el array de meses
echo "<h1>Meses</h1>";
foreach ($meses as $valor) {
    echo $valor . "<br>";
}

for($indice = 0; $indice <= 11; $indice++) {
    echo $meses[$indice] . "<br>";
}

// Array que almacene datos de una persona
$datos = ["Cristian", 
           23, 
           "Santiago", 
           false];

echo "<pre>";
var_dump($datos);
echo "</pre>";

echo "<pre>";
var_export($datos);
echo "</pre>";

echo "<h2>Mis datos son: </h2>";
echo "<ul>";
echo "<li>Nombre: {$datos[0]}</li>";
echo "<li>Edad: {$datos[1]}</li>";
echo "<li>Ciudad: {$datos[2]}</li>";
echo "<li>Posee carro: {$datos[3]}</li>";
echo "</ul>";


$datos = [
    5 => 'Cristian',
    6 => 23,
    7 => 'Santiago',
    8 => false
];

echo "<pre>";
var_export($datos);
echo "</pre>";


$datos = [
    "nombre" => 'Cristian',
    "edad" => 23,
    "ciudad" => 'Santiago',
    "posee_carro" => false
];

echo "<pre>";
var_export($datos);
echo "</pre>";

echo $datos['nombre'] . "<br>";
echo $datos['edad'] . "<br>";
echo $datos['ciudad'] . "<br>";
echo $datos['posee_carro'] . "<br>";

echo "<p>Tus datos son:</p>";
for($indice = 0; $indice <= 3; $indice++) {
    echo $datos[$indice] . "<br>";
}

foreach($datos as $dato) {
    echo $dato . "<br>";
}

$datos['colores'] = array('naranja', 'azul', 'blanco');

echo "<pre>";
var_export($datos);
echo "</pre>";

echo "<p>Tus colores son:</p>";
echo $datos['colores'][0] . "<br>";
echo $datos['colores'][1] . "<br>";
echo $datos['colores'][2] . "<br>";

$datos['paises'] = ['Norway', 'Finland', 'Canada'];
echo "<p>Tus paises favoritos son: </p>";
echo $datos['paises'][0] . "<br>";
echo $datos['paises'][1] . "<br>";
echo $datos['paises'][2] . "<br>";