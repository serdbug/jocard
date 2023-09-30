<?php
// Conexión a la base de datos (debes configurar tus propias credenciales)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "jocard";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    // Construir la consulta SQL para buscar el registro específico
    $sql = "SELECT * FROM stock WHERE cod = '$codigo'";

    // Ejecutar la consulta SQL
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Obtener los datos del registro encontrado
        $row = $result->fetch_assoc();

        // Mostrar los datos en un formulario para su modificación
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Modificar Stock</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>
        <body class="container-sm border border-5 border-dark mt-2 pb-3 mb-2">
            <div style="padding-left: 100px; padding-right: 100px;">
                <div style="padding-left: 100px; padding-right: 100px; text-align: center;">
                    <h1>Modificar Stock</h1>
                </div>
        
                <form id="formulario-modificacion" action="guardarModificacion.php" method="POST">
                    <!-- Campos de entrada para editar los datos -->
                    <input type="hidden" name="codigo_original" value="<?php echo $row['cod']; ?>">
                    
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control border-dark border-1" id="codigo" name="codigo" value="<?php echo $row['cod']; ?>" disabled><br>
        
                    <label for="rubro">Rubro:</label>
                    <input type="text" class="form-control border-dark border-1" id="rubro" name="rubro" value="<?php echo $row['rubro']; ?>" required><br>

                    <label for="eq1">EQ1:</label>
                    <input type="text" class="form-control border-dark border-1" id="eq1" name="eq1" value="<?php echo $row['eq1']; ?>" required><br>

                    <label for="eq2">EQ12</label>
                    <input type="text" class="form-control border-dark border-1" id="eq2" name="eq2" value="<?php echo $row['eq2']; ?>" required><br>

                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control border-dark border-1" id="marca" name="marca" value="<?php echo $row['marca']; ?>" required><br>

                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control border-dark border-1" id="modelo" name="modelo" value="<?php echo $row['modelo']; ?>" required><br>

                    <label for="detalle">Detalle:</label>
                    <input type="text" class="form-control border-dark border-1" id="detalle" name="detalle" value="<?php echo $row['detalle']; ?>" required><br>

                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control border-dark border-1" id="descripcion" name="descripcion" value="<?php echo $row['descripcion']; ?>" required><br>

                    <label for="venta">Venta:</label>
                    <input type="text" class="form-control border-dark border-1" id="venta" name="venta" value="<?php echo $row['venta']; ?>" required><br>

                    <label for="costo">Costo:</label>
                    <input type="text" class="form-control border-dark border-1" id="costo" name="costo" value="<?php echo $row['costo']; ?>" required><br>

                    <label for="fecha">Fecha:</label>
                    <input type="text" class="form-control border-dark border-1" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" required><br>
        
                    

                    <div style="padding-left: 100px; padding-right: 100px; text-align: center;">
                        <input type="submit" value="Guardar Cambios" class="btn btn-success" onclick="guardarCambios();">
                    </div>
                </form>
            </div>
            <script>
                function guardarCambios() {
                $.ajax({
                type: "POST",
                url: "guardarModificacion.php", // Ruta al archivo PHP que procesa la actualización
                data: $("#formulario-modificacion").serialize(), // Serialize el formulario para enviar los datos
                success: function (response) {
                alert(response); // Muestra un mensaje de éxito o error
                // Actualiza la tabla con los datos actualizados
                buscarRegistro();
                }
                });
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>
        </html>
        <?php
    } else {
        echo "No se encontraron resultados para el código proporcionado.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
