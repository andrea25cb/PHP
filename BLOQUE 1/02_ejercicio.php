<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 2, UT3</title>

</head>
<body>

<h1>Tablas de multiplicar del 1 al 10</h1>
<?php // Realiza una página web que muestre todas las tablas de multiplicar del 1 al 10.
$multiplicando;

echo "<table text-align:center; border=5>";
echo "<tr>";
for ($tabla=1; $tabla<=10  ; $tabla++) { 
	echo "<td>Tabla del $tabla </td>";
}
echo "</tr>";
echo "<tr>";
for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	for ($multiplicando=1; $multiplicando <=10 ; $multiplicando++) { 
		echo "<td>$multiplicando X $multiplicador = ";
		echo ($multiplicando *$multiplicador);

	}
	echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
