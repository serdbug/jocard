function validarFormulario() {
    // Validar que todos los campos estén completos
    var cod= document.getElementById("exampleFormControlInput1").value;
    var rubo= document.getElementById("exampleFormControlInput2").value;
    var  eq1= document.getElementById("exampleFormControlInput3").value;
    var  eq2= document.getElementById("exampleFormControlInput4").value;
    var  marca= document.getElementById("exampleFormControlInput5").value;
    var  modelo= document.getElementById("exampleFormControlInput6").value;
    var  detalle= document.getElementById("exampleFormControlInput7").value;
    var  descripcion= document.getElementById("exampleFormControlInput8").value;
    var  venta= document.getElementById("exampleFormControlInput9").value;
    var  costo= document.getElementById("exampleFormControlInput10").value;
    var  fecha= document.getElementById("exampleFormControlInput11").value;

    
    

    if (cod === "" || rubo === "" || eq1 ==="" || eq2==="" || marca==="" || modelo==="" || detalle==="" || descripcion==="" || venta==="" || costo==="" || fecha==="") {
        alert("Todos los campos deben completarse.");
        return false; // Evita el envío del formulario si falta algún campo
    }

    // Si todos los campos están completos, el formulario se enviará
    return true;
}