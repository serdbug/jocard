<?php
// Conexión a la base de datos (ajusta los datos según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jocard";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtener datos del formulario
$cod = $_POST['cod'];
$rubro = $_POST['rubro'];
$eq1= $_POST['eq1'];
$eq2 = $_POST['eq2'];
$marca = $_POST['marca'];
$modelo= $_POST['modelo'];
$detalle = $_POST['detalle'];
$descripcion = $_POST['descripcion'];
$venta = $_POST['venta'];
$costo= $_POST['costo'];
$fecha = $_POST['fecha'];

// Query SQL para insertar el registro en la tabla
$sql = "INSERT INTO stock (cod, rubro, eq1, eq2, marca, modelo, detalle, descripcion, venta, costo, fecha) VALUES ('$cod', '$rubro','$eq1','$eq2','$marca','$modelo','$detalle','$descripcion','$venta','$costo', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito.";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
