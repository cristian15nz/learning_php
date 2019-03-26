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

    if ($_GET['accion'] == 'actualizar' && isset($_GET['id'])) {
        // Logica de actualizar
        $sql = '';
    } else {
        // Logica que inserta....... que actualmente poseen
        $sql = "INSERT INTO categorias SET nombre";
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="hidden" name="id_categoria" value="<?php echo $_GET['id'] ?? "" ?>">
        <input type="text" placeholder="Nombre" value="<?php echo $_GET['nombre'] ?? "" ?>"> 
        <input type="button" value="guardar">
    </form>
</body>
</html>