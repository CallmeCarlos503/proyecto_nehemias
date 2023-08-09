function enviarFormulario() {
    // Aquí podrías agregar tu código para enviar el formulario
    // Por ejemplo, podrías usar XMLHttpRequest o fetch para enviar la información a un servidor
    // o podrías simplemente mostrar una alerta con los datos del formulario
    const nombre = document.getElementById("password").value;
    const email = document.getElementById("email").value;
    if (nombre == "" && email == "") {
        Swal.fire({
            icon: 'warning',
            title: 'Error de datos',
            text: 'Correo y Contraseñas erroneas o esta vacio',
            footer: '<a href="registrarse.html">Si no posees una cuenta registrate!</a>'
        })
        event.preventDefault();
    }

}
function ejemplo(){
    alert('ejercicio');
}
function video_presentacion(){
    
    Swal.fire({
        html:
            '<?php <video src="./video/triunfo.mp4" controls autoplay></video> ?>'
    })
    
    event.preventDefault();
}


