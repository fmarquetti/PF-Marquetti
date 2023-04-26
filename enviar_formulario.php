<?php

$nombre = $_POST['nombre_apellido'];
$correo = $_POST['correo_contacto'];
$telefono = $_POST['telefono_contacto'];
$servicio = $_POST['servicio_contacto'];
$fecha = $_POST['fecha_contacto'];
$nota = $_POST['nota_contacto'];

$destinatario = "contacto@kirana.com.ar";
$asunto = "Nuevo contacto desde el sitio WEB de Kirana.com.ar";

$mensaje = "Nombre y Apellido: " . $nombre . "\n";
$mensaje .= "Correo: " . $correo . "\n";
$mensaje .= "Telefono: " . $telefono . "\n";
$mensaje .= "Servicio: " . $servicio . "\n";
$mensaje .= "Fecha estimativa de evento: " . $fecha . "\n";
$mensaje .= "Nota: " . $nota;

$cabeceras = "From: " . $correo;

mail($destinatario, $asunto, $mensaje, $cabeceras);

header("Location: ../pages/contacto-llenado.html");

?>
