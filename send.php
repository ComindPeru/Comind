<?php
  
   	$admin = "juan_davilacalderon@hotmail.com";
   	$nombre = $_POST['nombre'];
   	$email = $_POST['email'];
   	$phone = $_POST['phone'];
   	$mensaje = $_POST['mensaje'];
    $contenido = "Nombre del Cliente: " . $nombre . "\nE-mail: " . $email . "\nTeléfono: " . $phone . "\nMensaje: " . $mensaje;

    mail($admin, "De: CONTACTO_" . $nombre, $contenido);
    
?>