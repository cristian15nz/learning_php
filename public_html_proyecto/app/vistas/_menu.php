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
                    <span class="badge badge-light"><?php echo count($listadoPublicaciones); ?></span></a>
            </nav>
        </div>
    </div>