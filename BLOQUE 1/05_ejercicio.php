<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 5, UT3</title>

</head>

<body>
<h1>Múltiplos de 3 y 4 hasta el 1000</h1>
<?php
// Realizar una página en php que muestre todos los números entre 1 y 1000 que son
//múltiplos de 3, 4.

$limite=1000;
$numero1=3;
$numero2=4;
for($i=0;$i<$limite;$i++){
	if($i%$numero1==0 && $i%$numero2==0){
	echo $i."<br>";
	}
}


?>


</body>
</html>
