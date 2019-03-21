<?php require "_head.php"; ?>

<body>

<?php require "_menu.php"; ?>

<div class="container">
    <form action="" method="post" class="col-md-6" enctype="multipart/form-data">
        <h3>Crear publicación</h3>
        <hr>
        <div class="form-group">
            <label for="">Titulo</label>
            <input class="form-control" type="text" name="inputTitulo" placeholder="Titulo" required>
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" name="inputDescripcion" placeholder="Descripcion" required>
        </div>
        <div class="form-group">
            <label for="">Categoria</label>
            <select class="form-control" name="selectCategoria" required>
                <?php
                foreach ($categorias as $categoria) {
                    echo "<option value='{$categoria['id']}'>{$categoria['nombre']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Subir archivo</label>
            <input class="form-control" type="file" name="inputArchivo">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" name="btnCrearPublicacion">Crear publicacion</button>
        </div>


    </form>

    <!-- Mostrar la tabla con las publicaciones -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Recorrer todas las publicaciones
        foreach ($listadoPublicaciones as $publicacion) {
            echo "<tr>
                <th>{$publicacion['id']}</th>
                <td>{$publicacion['titulo']}</td>
                <td>{$publicacion['descripcion']}</td>
                <td>{$publicacion['id_categoria']}</td>
            </tr>";
        }
        ?>


        </tbody>
    </table>
</div>

</body>

</html>