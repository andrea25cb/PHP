<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8, UT3</title>
</head>
<body>
<h1>Múltiplos de 5 en 5 segundos</h1>
<?php
/* La función time() devuelve la fecha en número de segundos desde el 1 de enero de 1970.
Realiza una página web que muestre en vuestro equipo todos los números múltiplos de 5
que le de tiempo a mostrar en 5 segundos. Mostraréis solamente 10 números por línea y
Después de 10 líneas incluireis un separador (raya, salto de línea, caracteres ...)*/
$saltoLinea;

define("fin"  ,time()+5);
$i=0;
$c = 0;
$cont = 0;
while(time()<fin){
	if($i % 5 == 0){
         echo $i." ";
         $cont++; 
	}
    $i++;
    $c++;
    if($c == 50){
        echo '<br> |';
        $c = 0;
    }
}
?>

</body>
</html>
