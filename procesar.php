<?php

$nombreApellido = $_POST ['nombreApellido'];
$dni = $_POST ['dni'];
$email = $_POST ['email'];
$uso = $_POST ['uso'];

$mensaje = "<h1>".$nombreApellido. "</h1>";
$mensaje .= "<hr />";
$mensaje .= "<p>El usuario cuyo dni es " .$dni. " le dará este uso:</p>";
$mensaje .= "<p>" .$uso. "</p>";

$para = 'ramivaras27@gmail.com';
$asunto = 'Mensaje desde la web de Ecobici';

$headers = "Mime-version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: $email \r\n";
$headers .= "To: $para \r\n";

mail ( $para, $asunto, $mensaje, $headers);
header ("Location: index.html")

?>