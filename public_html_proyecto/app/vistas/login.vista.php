<?php require '_head.php'; ?>

<body class="bg-light">
    <!-- .container -->
    <div class="container">
        <!-- .row>.col-md-4 -->
        <div id="login" class="row">
            <div class="col-md-4">

                <!-- form -->
                <form action="" method="post">
                    <h4><a href="/" class="text-xtudio text-decoration-none"><i class="fab fa-xing-square"></i> XtudioPlay</a></h4>
                    <hr>
                    <h4 class="mb-4">Iniciar sesión</h4>

                    <input class="form-control mb-3" type="text" name="inputUser" placeholder="Usuario" required autofocus autocapitalize="off" autocomplete="off">
                    <input class="form-control mb-3" type="password" name="inputPassword" placeholder="Contraseña" required autocomplete="off">
                    <button class="btn btn-primary btn-block mb-3" type="submit">Iniciar sesión</button>
                    <em class="text-danger">
                        <?php
                        if (isset($mensajesError['usuario_incorrecto'])) {
                            echo $mensajesError['usuario_incorrecto'];
                        }
                        ?>
                    </em>
                    <hr>
                    <div>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html> 