<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>27</title>
</head>
<body>
<?php

$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];

echo strtoupper($nombre)." ";
echo strtoupper($apellidos);

?>
<br><br>
<a href="27_ejercicio.html">Volver a formulario</a>
</body>
</html>