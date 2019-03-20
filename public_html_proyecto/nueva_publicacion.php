<?php

session_start();
require "app/mis_funciones.php";
require "app/conexion.php";

/* Codigo para guardar la publicacion */
//  Verificar que el usuario haya hecho click en el boton
if (isset($_POST['btnCrearPublicacion'])) {
    // Guardar los datos en un array para insertarlos a la base de datos
    $publicacion = array(
        'titulo' => $_POST['inputTitulo'],
        'descripcion' => $_POST['inputDescripcion'],
        'id_categoria' => $_POST['selectCategoria'],
        'nombre_archivo' => $_POST['inputArchivo'],
        'creado_por' => $_SESSION['usuario_id']
    );

    // 1. Preparar el query
    $sql = "INSERT INTO publicaciones(titulo, descripcion, id_categoria, nombre_archivo, creado_por) 
            VALUES (:titulo, :descripcion, :id_categoria, :nombre_archivo, :creado_por)";
    $comando = $conexion->prepare($sql);

    // 2. Ejecutar el query, con los datos de la publicacion
    $comando->execute($publicacion);

    // 3. Traer los datos
    $resultado = $comando->rowCount();

    if ($resultado > 0) {
        echo "Datos insertados.";
    } else {
        echo "Los datos no fueron insertados.";
    }
}

/* Fin del codigo para guardar */

/* Traer las publicaciones */
$listadoPublicaciones = selectPublicacionesDelUsuario($conexion, $_SESSION['usuario_id']);

$titulo = "Crear publicación";

// Definir las variables que voy a utilizar en la vista
$categorias = selectCategorias($conexion);




require vista("nueva_publicacion");
