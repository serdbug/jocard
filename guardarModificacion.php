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

if (isset($_POST['codigo_original'])) {
    $codigo_original = $_POST['codigo_original'];
    $rubro = $_POST['rubro'];
    $eq1 = $_POST['eq1'];
    $eq2 = $_POST['eq2'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $detalle = $_POST['detalle'];
    $descripcion = $_POST['descripcion'];
    $venta = $_POST['venta'];
    $costo = $_POST['costo'];
    $fecha = $_POST['fecha'];

    // Construir la consulta SQL para actualizar el registro
    $sql = "UPDATE stock SET rubro = '$rubro', eq1 = '$eq1', eq2 = '$eq2', marca = '$marca', modelo = '$modelo', detalle = '$detalle', descripcion = '$descripcion', venta = '$venta', costo = '$costo', fecha = '$fecha' WHERE cod = '$codigo_original'";

    if ($conn->query($sql) === TRUE) {
        echo "Los cambios se guardaron correctamente.";
    } else {
        echo "Error al guardar los cambios: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
