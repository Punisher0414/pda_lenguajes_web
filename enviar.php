<?php
    $destino = "paulrestrepo1404@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $movil = $_POST["movil"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo electrónico: " . $correo . "\nMóvil: " . $movil . "\Mensaje: " . $mensaje;

    mail($destino, "Mensaje desde página web", $contenido);

?>