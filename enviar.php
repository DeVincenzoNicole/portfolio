<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

$header = "Nuevo mensaje de mi portfolio";

$mensajeCompleto = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensajeCompleto .= "Su correo es " . $mail . "\r\n";
$mensajeCompleto .= "Mensaje: " . $mensaje . "\r\n";

$para = 'devincenzo.nicole@hotmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, $mensajeCompleto, $header);

header("Location:index.html");
?>
