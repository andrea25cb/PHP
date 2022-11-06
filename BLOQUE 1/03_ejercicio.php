<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 3, UT3</title>

</head>
<body>

<h1>Tabla de multiplicar aleatoria</h1>
<?php
// La función rand() genera un número aleatorio. Realiza una página que muestre de forma
//aleatoria una tabla de multiplicar

$multiplicando= rand(1,10);

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	echo "$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
	echo "<br>";
}
?>

</body>
</html>
