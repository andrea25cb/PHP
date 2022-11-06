<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 1, UT3</title>

</head>

<body>
<h1>Tabla de multiplicar del 5</h1>
<?php
// Realiza una página web que muestre la tabla de multiplicar del 5, utilizando bucles en PHP.
$multiplicando= 5;

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	echo "$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
	echo "<br>";
}
?>

</body>
</html>
