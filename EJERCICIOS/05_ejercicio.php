<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>EJ5</title>

</head>

<body>
   <?php
/* una página en la que realices distintas operaciones
//con los operadores disponibles. 
//Muestra el resultado de dichas expresiones, bien asignando un 
//valor a la variable o escribiendo directamente la expresión.
Comprueba el orden de evaluación combinando operadores con y sin parentesis.*/

//◦ Realiza suma/resta/multiplicación/división
$var1=5;
$var2=8;
$var3=7;

echo "Suma: ".$var1+$var2." <br>";
echo "Resta: ".$var1-$var2." <br>";
echo "Multiplicación: ".$var1*$var2." <br>";
echo "División: ".$var2/$var1." <br>";

//◦ Muestra el resto de una división
echo "Resto de división: ".$var1%$var2." <br>";

//◦ Divide dos enteros donde el numerador es menor que el denominador.
echo "División: ".$var1/$var2." <br>";
#Se dividen con normalidad

//◦ Crea operaciones compuestas donde combines los operadores. Demuestra que con los paréntesis 
//cambia el resultado al alterar la prioridad.
echo "Resultado: ".$var1*($var2*$var3)." <br>";

$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5

//◦ Concatena cadenas
$cadena1="Hola ";
$cadena2="mundo :)";

echo $cadena1.$cadena2." <br>";

//◦ Muestra operaciones con operadores binarios
echo "Suma: ".$var1+$var2." <br>";
echo "Resta: ".$var1-$var2." <br>";
echo "Multiplicación: ".$var1**$var2." <br>";
echo "División: ".$var2/$var1." <br>";

//◦ Muestra operaciones con operadores lógicos. ¿Que diferencia existe entre los
//operadores lógicos y binarios? ¿es igual que en java?
echo $var1 && $var2;

if($var1 && $var2){
  echo "Verdadero"." <br>";
}
else{
  echo "Falso"." <br>";
};

if(!$var1){
  echo "Falso"." <br>";
}
else{
  echo "Verdadero"." <br>";
}
#La diferencia es que los lógicos son necesitan únicamente una variable para trabajar. Es como en java.

  ?> 
</body>
</html>


