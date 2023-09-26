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

// Recoger los datos del formulario
$cod = $_POST['cod'];
$rubro = $_POST['rubro'];
$eq1 = $_POST['eq1'];
$eq2 = $_POST['eq2'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
// Agrega más campos de filtro según tus necesidades

// Construir la consulta SQL dinámica
$sql = "SELECT * FROM stock WHERE 1=1"; // La condición 1=1 permite agregar filtros opcionales

if (!empty($cod)) {
    $sql .= " AND cod = '$cod'";
}


if (!empty($rubro)) {
    $sql .= " AND rubro = '$rubro'";
}

if (!empty($eq1)) {
    $sql .= " AND eq1 = '$eq1'";
}

if (!empty($eq2)) {
    $sql .= " AND eq2 = '$eq2'";
}


if (!empty($marca)) {
    $sql .= " AND marca = '$marca'";
}

if (!empty($modelo)) {
    $sql .= " AND modelo = '$modelo'";
}

// Agrega más condiciones para otros campos de filtro

// Ejecutar la consulta SQL
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Cod</th><th>Rubro</th><th>Eq1</th><th>Eq2</th><th>Marca</th><th>Modelo</th><th>Detalle</th><th>Descripcion</th><th>venta</th><th>Costo</th><th>Fecha</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['cod'] . "</td>";
        echo "<td>" . $row['rubro'] . "</td>";
        echo "<td>" . $row['eq1'] . "</td>";
        echo "<td>" . $row['eq2'] . "</td>";
        echo "<td>" . $row['marca'] . "</td>";
        echo "<td>" . $row['modelo'] . "</td>";
        echo "<td>" . $row['detalle'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['venta'] . "</td>";
        echo "<td>" . $row['costo'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
