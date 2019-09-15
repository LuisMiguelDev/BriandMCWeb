<?php
  $destino = "lcastroper@hotmail.com";
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
  $exito = mail($destino, "Contacto", $contenido);
  //header("Location:contacto.html");

  if ($exito)
  {
    header('Refresh: 1; URL=contacto.html');
    echo'<script>alert("Mensaje enviado de forma exitosa")</script>';
  }

  else

  {
    echo "Mailer Error: " . $exito->ErrorInfo;
  }
  ?>
