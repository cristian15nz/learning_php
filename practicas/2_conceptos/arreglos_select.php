<?php

$usuario1 = [
    'id' => '1',
    'nombre' => 'Pedro',
    'correo' => 'pedro@hotmail.com',
    'username' => 'pedro2019',
    'password' => '123456',
];

$usuario2 = [
    'id' => '2',
    'nombre' => 'Maria',
    'correo' => 'maria@email.com',
    'username' => 'maria7',
    'password' => '123',
];

$usuario3 = [
    'id' => '3',
    'nombre' => 'Juan',
    'correo' => 'juan22@gmail.com',
    'username' => 'juan22',
    'password' => '123456789',
];

$usuarios = [
    0 => $usuario1,
    1 => $usuario2,
    2 => $usuario3
];

echo "<pre>";
var_export($usuarios);
echo "</pre>";