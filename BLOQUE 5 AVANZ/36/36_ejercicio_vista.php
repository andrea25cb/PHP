<?php include "36_ejercicio.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>36</title>
</head>

<body>

<h1>DATOS PERSONALES</h1>

<form action="36_ejercicio_resu.php" method="POST">

<?=imprimirPregunta($pregunta1)?>
<?=imprimirPregunta($pregunta2)?>
<?=imprimirPregunta($pregunta3)?>
<?=imprimirPregunta($pregunta4)?>
<br><br>
<input type="submit" value="Guardar">
       
</form>
</body>
</html>