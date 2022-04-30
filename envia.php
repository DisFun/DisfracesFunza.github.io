<?php
$para = 'maryuesgo.2002@gmail.com';
$name = $_POST['nombre'];
$tel = $_POST['tel'];
$mail = $_POST['correo'];
$message = $_POST['message'];

$header = "enviado desde la pagina";

$message = $message . "\nAtentamente:" . $name ;


$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

@mail($para, $asunto, $message, $header);

header("Location:index.html");
?>
