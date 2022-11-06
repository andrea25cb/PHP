<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 6, UT3</title>
</head>
<body>
<h1>Múltiplos de 3, 5 o 7, dividir en decenas</h1>
<?php
// Realizar una página en php que muestre todos los números entre 1 y 1000 que son
// múltiplos de 3, 5 o 7. Avanzará de línea cada vez que se cambie de decena.

for($i=0;$i<1000;$i++){
	if($i%3==0 || $i%5==0 || $i%7==0){
	    echo "$i ";
        if($i%10==0){
            echo "<br>";
        }
	}
}

?>
</body>
</html>
