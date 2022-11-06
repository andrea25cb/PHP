<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7, UT3</title>
</head>

<body>
<h1>Números aleatorios hasta que salga 15</h1>
<?php
// Utilizando el bucle do..while realiza un programa que muestre números aleatorios por
//pantalla entre 1 y 100 hasta que salga el 15

do {
    $numAle=rand(1,100);
    echo $numAle."<br>";
}while ($numAle != 15);
?>

</body>
</html>
