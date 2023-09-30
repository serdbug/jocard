// Función para buscar el registro utilizando AJAX
function buscarRegistro() {
    var codigo = $("#codigo").val(); // Obtener el código de entrada

    // Realizar la solicitud AJAX
    $.ajax({
        type: "POST",
        url: "buscar.php", // Ruta al archivo PHP que procesa la búsqueda
        data: { codigo: codigo }, // Enviar el código al servidor
        success: function (response) {
            // Mostrar los resultados en el elemento con ID "resultados"
            $("#resultados").html(response);
        }
    });
}