
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
//Utilizando la función date() y time() escribe una página que muestre la
// fecha que será dentro de 50 segundos, y dentro de 2 horas, 4 minutos
//y 3 segundos.

$mifecha= date('Y-m-d H:i:s'); 
$nuevaFecha = strtotime ('+2 hour', strtotime ($mifecha)) ; 
$nuevaFecha = strtotime ('+4 minute', $nuevaFecha) ; 
$nuevaFecha = strtotime ('+50 second', $nuevaFecha) ; 
$nuevaFecha = date ('Y-m-d H:i:s', $nuevaFecha); 

echo $nuevaFecha;
?>
</body>
</html>
