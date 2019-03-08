<?php
$saludo = "Bienvenidos a mi sitio web XtudioPlay";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Cambiar el color del tema en Google Chrome -->
    <meta name="theme-color" content="#db5945">
    <title><?php echo $saludo; ?></title>
</head>
<body>
    <div class="container">
        <h1><?= $saludo; ?></h1>
    </div>
</body>
</html>