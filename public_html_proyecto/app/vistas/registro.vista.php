<?php require '_head.php'; ?>

<body class="bg-light">
    <!-- .container -->
    <div class="container">
        <!-- .row>.col-md-4 -->
        <div id="login" class="row">
            <div class="col-md-4">

                <!-- form -->
                <form action="registro.php" method="post">
                    <h4><a href="/" class="text-xtudio text-decoration-none"><i class="fab fa-xing-square"></i>XtudioPlay</a></h4>
                    <hr>
                    <h4 class="mb-4">Registrarse</h4>
                    <input class="form-control mb-3" type="text" name="inputName" placeholder="Nombre" required autofocus autocomplete="off">
                    <input class="form-control mb-3" type="email" name="inputEmail" placeholder="Email" required autocomplete="off">
                    <input class="form-control mb-3" type="text" name="inputUser" placeholder="Usuario" required autocapitalize="off" autocomplete="off">
                    <input class="form-control mb-3" type="password" name="inputPassword" placeholder="Contraseña" required autocomplete="off">
                    <button class="btn btn-primary btn-block mb-3" type="submit">Registrarse</button>
                    <div class="text-danger">
                        <?php
                        if (isset($mensaje)) {
                            echo $mensaje;
                        }
                        ?>
                    </div>
                    <hr>
                    <div>¿Tienes una cuenta? <a href="login.php">Inicia sesión</a></div>
                </form>

            </div>
        </div>
    </div>

</body>

</html> 