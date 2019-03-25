<?php

// Verificar las variables por la URL
if ( isset($_GET['accion']) && isset($_GET['id']) ) {

    // Guardar el id en una variable
    $idCategoria = $_GET['id'];

    // Accion de borrar
    if ($_GET['accion'] == 'borrar') {
        echo "Logica para borrar";
        // Borrado fisico
        $sql = "DELETE FROM categorias WHERE id = $idCategoria ";

        // Borrado logico
        $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria ";

    }

    // Accion de actualizar
    if ($_GET['accion'] == 'actualizar') {
        echo "Logica para actualizar";
    }

}