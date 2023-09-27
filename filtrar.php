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
    echo "<table class='table table-bordered' style='border: 1px solid black;'>";


    echo "<tr>";
    echo "<th class='text-center'>Cod</th>";
    echo "<th class='text-center'>Rubro</th>";
    echo "<th class='text-center'>Eq1</th>";
    echo "<th class='text-center'>Eq2</th>";
    echo "<th class='text-center'>Marca</th>";
    echo "<th class='text-center'>Modelo</th>";
    echo "<th class='text-center'>Detalle</th>";
    echo "<th class='text-center'>Descripcion</th>";
    echo "<th class='text-center'>venta</th>";
    echo "<th class='text-center'>Costo</th>";
    echo "<th class='text-center'>Fecha</th>";
    echo "</tr>";



    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['cod'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['rubro'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['eq1'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['eq2'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['marca'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['modelo'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['detalle'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['descripcion'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['venta'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['costo'] . "</td>";
        echo "<td style='text-align: center; vertical-align: middle; font-size: 12px; font-weight: bold;'>" . $row['fecha'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
