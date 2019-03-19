<?php require "_head.php"; ?>

<body class="bg-white">
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-primary" href="#"><i class="fab fa-xing-square"></i> XtudioPlay</a>

            <form action="" class="form-inline">
                <input type="search" class="form-control form-control-sm mr-1" placeholder="Buscar...">
                <button type="submit" class="btn btn-sm btn-outline-primary" name="btnBuscar">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <a href="logout.php" class="text-danger"></i> Cerrar sesión</a>

        </div>
    </nav>

    <!--  Menu  -->
    <div class="shadow-sm">
        <div class="container">
            <nav class="nav mb-4 pt-1 pb-1">
                <a class="nav-link active" href="#">Inicio</a>
                <a class="nav-link" href="#">Mis publicaciones
                    <span class="badge badge-light"><?php echo count($publicaciones); ?></span></a>
            </nav>
        </div>
    </div>

    <!--  Saludo  -->
    <div class="jumbotron">
        <div class="container">
            <h2 class="font-weight-normal">Bienvenido <?php echo $_SESSION['usuario_nombre']; ?> a tu página principal.</h2>
            <p class="lead">Empieza a disfrutar de tu espacio.</p>
            <a href='nueva_publicacion.php' class='btn btn-primary'><i class='fas fa-plus mr-1'></i> Crear publicación</a>
        </div>
    </div>

    <!--  Contenido principal  -->
    <main class="container">
        <div class="row">
            <?php

            // Si no hay publicaciones, mostrar el siguiente mensaje
            /*if (isset($publicaciones) && count($publicaciones) < 1) {
                echo "<div class='bg-light border rounded text-center p-5'>
                        <img src='recursos/img/post.svg' alt='post' style='width: 150px;'>
                        <h4 class='mt-3 mb-2'>Hey {$_SESSION['usuario_nombre']} al parecer no tienes publicaciones.</h4>
                        <p class='lead'>¿Qué te parece si creas tu primera publicación?</p>
                        <a href='nueva_publicacion.php' class='btn btn-outline-primary'><i class='fas fa-plus-circle mr-1'></i> Crear publicación</a>
                    </div>";
            }*/

            ?>

            <div class="col-md-12">
                <h2 class="font-weight-normal">Tus publicaciones recientes
                    <small class="badge badge-secondary font-weight-light"><?php echo count($publicaciones); ?></small>
                </h2>
                <hr>
            </div>

            <?php

            // Mostrar las publicaciones (si las hay)
            if (count($publicaciones) > 0) {
                foreach ($publicaciones as $publicacion) {
                    echo "<div class='col-md-4 mb-3'>
                            <div class='card'>
                                <div class='card-body'>
                                <h5 class='card-title'>#{$publicacion['id']} {$publicacion['titulo']}</h5>
                                <h6 class='card-subtitle mb-2 text-muted'>{$publicacion['id_categoria']}</h6>
                                <p class='card-text'>{$publicacion['descripcion']}</p>
                                </div>
                            </div>
                        </div>";
                }
            }

            ?>
        </div>

    </main>
</body>

</html>