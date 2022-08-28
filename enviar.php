<?php
$destinatario = 'flavionicolascoulleri@gmail.com';

$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'Enviado desde portfolio';
$mensajeCompleto = $message . "\nAtentamente: " . $name;

mail($destinatario, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>
