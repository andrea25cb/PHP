<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

<?php
//Crea la función EsPrimo(numero) 'que devuelva un booleano' que indique si el número pasado como parámetro es primo.
//Utilizando dicha función mostrar en una página los números primos menores de 100 que existen.
//no tiene divisor= es primo

//uso cont para ir agrupando los números
function esPrimo($num){
    $cont = 0;
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0) {
            if ($cont++ > 1) {
                return false; //no es primo
            }
        }
    }
    return true;  //es primo
}

echo esPrimo(7);
echo esPrimo(56);
echo esPrimo(9);
echo esPrimo(76);

//numeros primos del 1 al 100:
for($nums=2;$nums<100;$nums++){
    if(esPrimo($nums)){
        echo $nums." ";
    }
}
?>

</body>
</html>