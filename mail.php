<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['email'];
	$mensaje = $_POST['comentarios'];

$para = "michaelapl96@gmail.com";
$asunto = $nombre." Comentarios sobre CityConferences";
$cabecera = "From: $correo" . "\r\n" .
            "CC: angelbastogz@gmail.com" . "\r\n".
            "BCC: milka.cabrilla@gmail.com";

mail($para,$asunto,$mensaje,$cabecera);
header('Location: index.php?exitoso=1');
?>
