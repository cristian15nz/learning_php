<?php require "_head.php"; ?>

<body>
<div class="row">
    <form action="" method="post" class="col-md-3">
        <h3>Crear publicacion</h3>
        <hr>
        <input class="form-control" type="text" name="inputTitulo" placeholder="Titulo" required>
        <input class="form-control" type="text" name="inputDescripcion" placeholder="Descripcion" required>
        <select class="form-control" name="selectCategoria" required>
            <?php
                foreach ($categorias as $categoria) {
                    echo "<option value='{$categoria['id']}'>{$categoria['nombre']}</option>";
                }
            ?>
        </select>
        <input class="form-control" type="file" name="inputArchivo">
        <button class="btn btn-primary" name="btnCrearPublicacion">Crear publicacion</button>
    </form>
    </div>

    <!-- Mostrar los datos de la base de datos -->
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
    foreach($listadoPublicaciones as $publicacion) {
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
</body>

</html>