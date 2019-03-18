<?php require "_head.php"; ?>

<body>
<div class="row">
    <form action="" method="post" class="col-md-3">
        <h3>Crear publicacion</h3>
        <hr>
        <input class="form-control" type="text" name="inputTitulo" placeholder="Titulo" required>
        <input class="form-control" type="text" name="inputDescripcion" placeholder="Descripcion" required>
        <select class="form-control" name="selectCategoria" required>
            <option>--Selecciona--</option>
            <option value="1">Tecnologia</option>
            <option value="2">Salud</option>
            <option value="3">Ocio</option>
        </select>
        <input class="form-control" type="file" name="inputArchivo">
        <button class="btn btn-primary" name="btnCrearPublicacion">Crear publicacion</button>
    </form>
    </div>
</body>

</html>