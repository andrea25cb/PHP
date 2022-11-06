<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
/*Realizar una página que verifique si un dni es correcto. (solo hace falta para los que tienen el formato NúmeroLetra). 
Formato NIF: http://es.wikipedia.org/wiki/N %C3%BAmero_de_identificaci%C3%B3n_fiscal
*/
//descomponer numeros y letra
function comprobarDNI($dni){
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
   
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
      return "DNI CORRECTO<br>";
    }else{
        return "DNI INCORRECTO<br>";
    }
}

echo comprobarDNI("49731902Z");
echo comprobarDNI("2731902Z");

?>
</body>
</html>
