// Captura el evento de envío del formulario
$('#filtrar-form').submit(function(e) {
    e.preventDefault(); // Evita que se envíe el formulario de forma tradicional

    // Obtén el valor de los campos de entrada
var cod = $('input[name="cod"]').val();
var rubro = $('input[name="rubro"]').val();
var eq1 = $('input[name="eq1"]').val();
var eq2 = $('input[name="eq2"]').val();
var marca = $('input[name="marca"]').val();
var modelo = $('input[name="modelo"]').val();

// Verifica si todos los campos están vacíos
if (cod === '' && rubro === '' && eq1 === '' && eq2 === '' && marca === '' && modelo === '') {
    alert('Por favor, ingrese al menos un valor en uno de los campos antes de buscar.');
    return; // Detén la función si los campos están vacíos
}
  



    // Realiza una solicitud AJAX
    $.ajax({
        type: 'POST',
        url: 'filtrar.php',
        data: $(this).serialize(), // Serializa el formulario para enviar los datos
        success: function(response) {
            // Muestra los resultados en el div "resultados"
            $('#resultados').html(response);
            // Restablece los valores de los campos de entrada a cadena vacía
        $('#filtrar-form input[type="text"]').val('');
        }
    });
});

$('#borrar-busqueda').click(function() {
// Vacía el contenido del div "resultados"
$('#resultados').empty();
});