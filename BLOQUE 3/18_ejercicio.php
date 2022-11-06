<?php
/*Utilizando arrays crea la función DiasMes(num_mes) que devolverá un entero que será el número de días que tiene un mes.
Utilizando dicha función realiza un programa que imprima el número de días que tienes los
distintos meses. El nombre del mes se almacenará en una array igualmente.
*/

function DiasMes($num_mes){
    $dias = ['30','28','31','30','31','30','31','31','30','31','30','31'];
        return $dias[$num_mes];
}

function nombreMes(){
    $meses=['enero','febrero','marzo','abril','mayo','junio','agosto','septiembre','octubre','noviembre','diciembre'];
 
    foreach($meses as $key=>$nombre)
        return $meses[$key]." tiene ".DiasMes($key)." días. <br>";
}


echo nombreMes();


?>