
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>EJ9</title>

</head>

<body>
   
<?php
/*Realiza un programa que sume dos variables. Prueba su ejecución dando a las variables
valores de distintos tipos de datos (entero, real, cadena, etc). Como por ejemplo:
◦ 5 y 6.0
◦ “7” y “9.0”
◦ 2 y “hola”
◦ 2 y “3lola”
*/

$var1=5;
$var2=6.0;

$var3="7";
$var4="9.0";

$var5=2;
$var6="hola";


$var7=2;
$var8="3hola";

echo " var1 + var2 = ".$var1+$var2;

echo " var3 + var4 = ".$var3+$var4;

echo "var5 + var6 = ".$var5+$var6; //Uncaught TypeError: Unsupported operand types: int + string

echo "var7 + var8 = ".$var7+$var8; //Warning: A non-numeric value encountered

?>
</body>
</html>
