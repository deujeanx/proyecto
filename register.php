<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

$conexion -> query("INSERT INTO personas(nombre, contraseña) values ('$nombre','$contraseña')");

echo 'usuario registrado';

?>