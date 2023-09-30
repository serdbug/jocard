<!DOCTYPE html>
<html>
<head>
    <title>Modificar Stock</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container-sm border border-5 border-dark mt-2 pb-3 mb-2">
    <div style="padding-left: 100px; padding-right: 100px;">
        <div style="padding-left: 100px; padding-right: 100px; text-align: center;">
            <h1>Modificar Stock</h1>
        </div>
    
        <form action="buscar.php" method="POST">
            <!-- Campo de búsqueda por código -->
            <label for="codigo">Código a buscar:</label>
            <input type="text" class="form-control border-dark border-1" id="codigo" name="codigo" required><br>
    
            <!-- Botón de búsqueda -->
            <input type="submit" value="Buscar" class="btn btn-primary">
        </form>

        <!-- Aquí se mostrarán los resultados -->
        <div id="resultados">
            <!-- Los resultados de la búsqueda se cargarán aquí -->
        </div>

  
       
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="buscarRegistro.js"></script>
</body>
</html>
