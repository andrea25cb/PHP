<?php
//Crea la función Intercambia(v1, v2) la cual intercambiará el valor de las dos variables.
//Realizar una página en la que se pruebe el funcionamiento de dicha función intercambiando el valor de dos variables. Mostrar las variables antes y después de la invocación de la función.


function intercambia(&$num1, &$num2) {
	$aux=&$num2; //ahora aux es num2
    $num2=&$num1; //ahora num2 es num1
   	$num1=&$aux; //ahora num1 es aux 
}

$var1="Hola";
$var2="adios";

intercambia($var1,$var2);

?>
