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

</body>

</html>