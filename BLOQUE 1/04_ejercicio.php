<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 4, UT3</title>

</head>

<body>
<h1>MOSTRAR NÚMERO EN LETRA</h1>
<?php
// Utilizando la construcción switch realiza un programa que genere un número aleatorio
//entre 1 y 10 y muestre en la página el número en letra.
$numAle = rand(1,10);

switch($numAle){
    case 1: echo("El número $numAle en letra es uno");
    break;
    case 2:  echo("El número $numAle en letra es dos");
    break;
    case 3: echo("El número $numAle en letra es tres");
    break;
    case 4:  echo("El número $numAle en letra es cuatro");
    break;
    case 5:  echo("El número $numAle en letra es cinco");
    break;
    case 6:  echo("El número $numAle en letra es seis");
    break;
    case 7:  echo("El número $numAle en letra es siete");
    break;
    case 8:  echo("El número $numAle en letra es ocho");
    break;
    case 9:  echo("El número $numAle en letra es nueve");
    break;
    case 10:  echo("El número $numAle en letra es diez");
    break;

}
?>


</body>
</html>
