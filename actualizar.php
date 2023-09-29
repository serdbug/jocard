<!DOCTYPE html>
<html>
<head>
    <title>Carga de Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="actualizar.css">
  </head>
</head>
<body class="container-sm border border-5 border-dark mt-2 pb-3 mb-2">
    <div style="padding-left: 100px; padding-right: 100px;">

    <div style="padding-left: 100px; padding-right: 100px; text-align: center;">
        <h1>Carga de Stock</h1>
    </div>
    


    
    <form action="insertar.php" method="POST" onsubmit="return validarFormulario();">
        <label for="exampleFormControlInput1" class="form-label">Codigo:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput1" placeholder="Codigo" name="cod"><br>

        <label for="exampleFormControlInput1" class="form-label">Rubro:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput2" placeholder="Rubro" name="rubro"><br>

        <label for="exampleFormControlInput1" class="form-label">EQ1:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput3" placeholder="EQ1" name="eq1"><br>

        <label for="exampleFormControlInput1" class="form-label">EQ2:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput4" placeholder="EQ2" name="eq2"><br>

        <label for="exampleFormControlInput1" class="form-label">Marca:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput5" placeholder="Marca" name="marca"><br>

        <label for="exampleFormControlInput1" class="form-label">Modelo:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput6" placeholder="Modelo" name="modelo"><br>

        <label for="exampleFormControlInput1" class="form-label">Detalle:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput7" placeholder="Detalle" name="detalle"><br>

        <label for="exampleFormControlInput1" class="form-label">Descripcion:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput8" placeholder="descripcion" name="descripcion"><br>

        <label for="exampleFormControlInput1" class="form-label">Venta:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput9" placeholder="Venta" name="venta"><br>

        <label for="exampleFormControlInput1" class="form-label">Costo:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput10" placeholder="Costo" name="costo"><br>

        <label for="exampleFormControlInput1" class="form-label">Fecha:</label>
        <input type="text" class="form-control border-dark border-1" id="exampleFormControlInput11" placeholder="Fecha" name="fecha"><br>

        <div style="padding-left: 100px; padding-right: 100px; text-align: center;">
            <input type="submit" value="Insertar Registro" class="btn btn-dark">
        </div>

        <script src="validacion.js"></script>

    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
