
<?php
/*Comprueba si los arrays se pasan por valor o referencia como parámetros de una función. SI
Modifica los datos de una array pasado como parámetro a una función y comprueba si se han modificado al salir de esta. SI, SE HA MODIFICADO*/

function prueba($prueba){
    $prueba=['manzana','platano','fresa'];
return $prueba;
}

$frutas= prueba($frutas);
$frutas[3]='pera';

echo $frutas[0]." ".$frutas[1]." ".$frutas[2]." ".$frutas[3]." ";
//COMPROBAMOS QUE SI, SE NOS IMPRIME EL NUEVO ELEMENTO AÑADIDO



?>