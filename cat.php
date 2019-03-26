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

    // Acción de actualizar
    // ------ Esta parte va cuando se inserta en el formulario

    // 1. Definir un input type hidden name="id_categoria" 
    //    Este input va a guardar el valor del id enviado 
    //    por el GET

    // 2. Antes de hacer el insert de las categorias
    //    Preguntar si existe ese input
    //    En caso verdadero: actualizar
    //    En caso falso: insertar


}