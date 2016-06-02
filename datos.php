<?php

$nombre = $_REQUEST["nombre"];
$paterno = $_REQUEST["paterno"];
$materno = $_REQUEST["materno"];
$edad = $_REQUEST["edad"];
$direccion = $_REQUEST["direccion"];
$profesion = $_REQUEST["profesion"];

echo "Nombre:  $nombre<br>";
echo "Apellido paterno: $paterno<br>";
echo "Apellido materno: $materno<br>";
echo "Edad: $edad<br>";
echo "Direccion: $direccion<br>";
echo "Profesion: $profesion<br>";
?>