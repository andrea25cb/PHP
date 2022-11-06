<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>EJ11</title>

</head>

<body>
<?php
/*Estudia la diferencia de comportamiento del operador “==” y el operador “===”. Para ello
inicializa dos variables $v1, $v2 a los valores 1 y “1”, y luego comprueba utilizando la
expresión echo $v1==$v2 y echo $v1===$v2 si dan el mismo resultado. */

$var1=1;
$var2="1";

echo " Resultado de 'var1 == var2' es:".$var1==$var2;
echo " Resultado de 'var1 === var2' es:".$var1===$var2;

#La diferencia es que con '==' convierte los valores de las variables al mismo tipo antes de realizar la comparación. 
#y con '===' devuelve verdadero solo si los valores y los tipos son idénticos para las dos variables que se comparan.
?>
</body>
</html>

