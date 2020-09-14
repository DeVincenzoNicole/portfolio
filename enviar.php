<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

$header = "De: " . $mail . "\r\n";
$header .= "Content-Type: text/plain";

$mensajeCompleto = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensajeCompleto .= "Su correo es " . $mail . "\r\n";
$mensajeCompleto .= "Mensaje: " . $mensaje . "\r\n";
$mensajeCompleto .= "Enviado el " . date('d/m/Y', time());

$para = 'devincenzo.nicole@hotmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensajeCompleto), $header);

header("Location:index.html");
?>
