<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su correo es " . $mail . "\r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'devincenzo.nicole@hotmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
