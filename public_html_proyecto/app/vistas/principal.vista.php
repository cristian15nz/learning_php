<?php require "_head.php"; ?>

<body>

<!-- As a link -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">XtudioPlay</a>
</nav>

<div class="jumbotron">
    <h1 class="display-5">Bienvenido <?php echo $_SESSION['usuario_nombre'] ?></h1>
    <p class="lead">Esta es la pagina principal</p>
    <hr class="my-4">
    <a class="btn btn-danger btn-lg" href="#" role="button">Cerrar sesion</a>
</div>

<div>
    <a class="btn btn-primary" href="nueva_publicacion.php">Crear publicacion</a>
</div>

<div>
    <h3>Listado de tus publicacioes:</h3>
    <div class="row">
    <?php 

$publicaciones = selectPublicaciones($conexion);

foreach($publicaciones as $publicacion) {
    echo "<div class='col-md-4'>
            <div class='card'>
                <div class='card-body'>
                <h5 class='card-title'>#{$publicacion['id']} {$publicacion['titulo']}</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{$publicacion['id_categoria']}</h6>
                <p class='card-text'>{$publicacion['descripcion']}</p>
                </div>
            </div>
        </div>";
}

?>

    </div>
</div>

</body>

</html>