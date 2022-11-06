<?php
//. Crea la función MuestraFecha(dia, mes, anyo) que mostrará la fecha que se le pase como
//parámetro en el formato “dia _semana (lunes...), num_dia de nombre_mes de num_anyo”.

function muestraFecha($dia,$mes,$anyo){
    include '11_ejercicio.php'; 
    $fecha = strtotime($mes."/".$dia."/".$anyo);
switch (date('w',$fecha)){
    case 0: return "Domingo, ";
    case 1: return "Lunes, ";
    case 2: return "Martes, ";
    case 3: return "Miércoles, ";
    case 4: return "Jueves, ";
    case 5: return "Viernes, ";
    case 6: return "Sábado, ";
 
}
    return "Día ".$dia." de ".nombreMes($mes)." de ".$anyo."$anyo";
}

echo muestraFecha(1,2,2022);
?>