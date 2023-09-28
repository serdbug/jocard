<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción</title>
</head>
<body>
    <h1>Formulario de Inserción</h1>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br><br>

        <input type="submit" value="Insertar Registro">
    </form>
</body>
</html>
