<?php
    $destino = "josuedani1977@gmail.com";
    $nombre = $_POST['nombre'];  
    $mail = $_POST['email'];
    $telefono = $_POST['telefono'];    
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $mail . "\nAsunto: " . $asunto . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;


    
    

    mail($destino , " Contacto ", $contenido);
    header("Location:contact.php");



?>