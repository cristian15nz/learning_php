<?php

echo "<pre>";
var_export($_FILES);
echo "</pre>";

if (isset($_POST['btnSubir'])) {

    
    
    $destino = "archivos";
    $nombreArchivo = $_FILES['inputArchivo']['name'];
    $nombreArchivoTemp = $_FILES['inputArchivo']['tmp_name'];

    $destino .= DIRECTORY_SEPARATOR . "$nombreArchivo";

    $subido = move_uploaded_file($nombreArchivoTemp, $destino);

    if ($subido == true) {
        echo "El archivo se subió";
    } else {
        echo "El archivo no se subió";
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
    <form action="" method="post" enctype="multipart/form-data">
        <input name="inputArchivo" type="file">
        <input name="inputArchivo2" type="file">
        <button name="btnSubir">Subir</button>
    </form>
</body>
</html>