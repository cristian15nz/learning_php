<?php require "_head.php" ?>

<body class="bg-white">
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-primary" href="#"><i class="fab fa-xing-square"></i> XtudioPlay</a>

            <form action="" class="form-inline">
                <input type="search" class="form-control form-control-sm mr-1" placeholder="Buscar...">
                <button type="submit" class="btn btn-sm btn-outline-primary" name="btnBuscar">
                    <i class="fas fa-search"></i></button>
            </form>

            <a href="#" class="text-danger"></i> Cerrar sesión</a>

        </div>
    </nav>

    <!--  Menu  -->
    <div class="shadow-sm">
        <div class="container">
            <nav class="nav mb-4 pt-1 pb-1">
                <a class="nav-link text-dark active" href="#">Inicio</a>
                <a class="nav-link text-dark" href="#">Mis publicaciones <span class="badge">27</span></a>
                <a class="nav-link text-dark" href="#">Likes</a>
                <a class="nav-link text-dark" href="#">Mi perfil</a>
            </nav>
        </div>
    </div>

    <!--  Saludo  -->
    <div class="jumbotron d-none">
        <div class="container">
            <h2 class="font-weight-normal">Bienvenido {Cristian} a tu página principal.</h2>
            <p class="lead">En esta sección verás las publicaciones que has realizado.</p>
        </div>
    </div>

    <!--  Mensaje si no hay publicaciones creadas  -->
    <div class="container">
        <div class="bg-light border rounded text-center p-5">
            <img src="recursos/img/post.svg" alt="post" style="width: 150px;">
            <h4 class="mt-3 mb-2">Hey {Cristian} al parecer no tienes publicaciones.</h4>
            <p class="lead">¿Qué te parece si creas tu primera publicación?</p>
            <a href="#" class="btn btn-outline-primary"><i class="fas fa-plus-circle mr-1"></i> Crear publicación</a>
        </div>
    </div>

    <!--  Contenido principal  -->
    <main class="container">

        <div class="row">
            <div class="col-md-7">

            </div>
        </div>

    </main>
</body>
</html>
