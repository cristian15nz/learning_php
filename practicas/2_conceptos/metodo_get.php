<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usando el metodo GET</title>
</head>
<body>

    <a href="saludo.php?nombre=Maria&apellido=Gomez&edad=18&ciudad=Santiago">Saludar a Maria</a>

    <form action="saludo.php">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>

        <div>
            <label for="">Apellido</label>
            <input type="text" name="apellido">
        </div>

        <div>
            <label for="">Edad</label>
            <input type="text" name="edad">
        </div>

        <div>
            <label for="">Ciudad</label>
            <input type="text" name="ciudad">
        </div>

        <div>
            <label for="">Color</label>
            <input type="color" name="color">
        </div>

        <div>
            <button>Enviar datos</button>
        </div>
    </form>

    <pre>
    <?php var_dump($_GET); ?>
    </pre>
</body>
</html>