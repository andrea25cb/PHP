<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
/* Crea la función Max(array) que nos devolverá el valor máximo de un array. Realiza una
página que pruebe dicha función.*/
 
function valorMax($array){
    $valorMaximo=0;
	// Se puede obtener el total de valores con la instrucción count() del php
	$cantidadValores=0;
 
	// Bucle que va recorriendo cada uno de los valores recibidos en el array
	// para encontrar el mayor valor
	foreach($array as $valor)
	{
		if($valor>$valorMaximo)
			$valorMaximo=$valor;
		$cantidadValores++;
	}
	return array($cantidadValores,$valorMaximo);
}
 
$miArray=array(7,25,63,41,85,4,66,74);
 
list($cantidadValores,$valorMaximo)=valorMax($miArray);
 
echo "<br>El valor máximo es: ".$valorMaximo;

?>

</body>
</html>

