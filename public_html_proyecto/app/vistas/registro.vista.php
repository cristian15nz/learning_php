<?php require '_head.php'; ?>

<body class="bg-dark text-white text-center">
    <!-- .container -->
    <div class="container">
        <!-- .row>.col-md-4 -->
        <div id="login" class="row">
            <div class="col-md-4">

                <!-- form -->
                <form action="" method="post">
                    <h4><a href="/" class="text-decoration-none"><i class="fab fa-xing-square"></i> XtudioPlay</a></h4>
                    <hr>
                    <h3 class="font-weight-normal mb-4">Registrarse</h3>
                    <input class="form-control mb-3" type="text" name="inputName" placeholder="Nombre" required autofocus>
                    <input class="form-control mb-3" type="email" name="inputEmail" placeholder="Email" required>
                    <input class="form-control mb-3" type="text" name="inputUser" placeholder="Usuario" required>
                    <input class="form-control mb-3" type="password" name="inputPassword" placeholder="Contraseña" required>
                    <button class="btn btn-primary btn-block mb-3" type="submit">Registrarse</button>
                    <hr>
                    <div>¿Tienes una cuenta? <a href="login.php">Inicia sesión</a></div>
                </form>

            </div>
        </div>

    </div>

    <!-- Incluir JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 