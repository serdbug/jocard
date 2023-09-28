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
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

// Query SQL para insertar el registro en la tabla
$sql = "INSERT INTO test (nombre, edad) VALUES ('$nombre', $edad)";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito.";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
