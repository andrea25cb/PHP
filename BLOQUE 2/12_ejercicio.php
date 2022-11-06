<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
//Crea la función EstoNoSeDebeHacer() -sin parámetros, que hará uso de la palabra reservada global-
// que modifica la variable $num asignándole el doble de su valor. 
//La variable está iniciada fuera de la función. 
//Crea una página que cree y pruebe el funcionamiento de la función.
$num=3;

function estoNoDebeHacerse()
{
    global $num;
    $num = $num * 2;
}

estoNoDebeHacerse();
echo $num;
?>
</body>
</html>