<?php 
//¿Que sucede si sumas una variable inicializada y una no inicializada?

$var1=2;
$var2;
echo $var1+$var2;

//Lo que sucede: 'Warning: Undefined variable $var2 in C:\xampp\htdocs\EJERCICIOS\EJ8.php on line 7'
//Debe iniciarse la variable.
?> 