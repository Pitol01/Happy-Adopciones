<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    // Destinatario y asunto del correo
    $destinatario = "mattsito14@gmail.com"; 
    $asunto = "Nuevo mensaje de adopción de HappyAdopciones";

    // Construir el cuerpo del mensaje
    $mensajeCorreo = "Nombre: " . $nombre . "\n";
    $mensajeCorreo .= "Correo electrónico: " . $email . "\n";
    $mensajeCorreo .= "Mensaje:\n" . $mensaje . "\n";

    // Cabeceras adicionales
    $cabeceras = "From: " . $email . "\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensajeCorreo, $cabeceras)) {
        echo '<p>¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.</p>';
    } else {
        echo '<p>Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>';
    }
} else {
    echo '<p>Acceso no permitido.</p>';
}
?>
