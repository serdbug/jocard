<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción</title>
</head>
<body>
    <h1>Formulario de Inserción</h1>
    <form action="insertar.php" method="POST">
        <label for="cod">Cod:</label>
        <input type="number" name="cod" required><br><br>

        <label for="rubro">Rubro:</label>
        <input type="text" name="rubro" required><br><br>

        <label for="eq1">EQ1</label>
        <input type="text" name="eq1" required><br><br>

        <label for="eq2">EQ2</label>
        <input type="text" name="eq2" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle" required><br><br>

        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" required><br><br>

        <label for="venta">Venta:</label>
        <input type="text" name="venta" required><br><br>

        <label for="costo">Costo:</label>
        <input type="" name="" required><br><br>

        <label for="fecha">Fecha:</label>
        <input type="text" name="fecha" required><br><br>

        <input type="submit" value="Insertar Registro">
    </form>
</body>
</html>
