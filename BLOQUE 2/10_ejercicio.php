<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
//Crea la función DiasMes(num_mes) que devolverá un entero que será el número de días que tiene un mes. Utilizando dicha función realizar un programa que imprima las fechas existentes entre el 1 de enero de 1999 y el 31 de diciembre de 2012.
//Las fechas se mostrarán separadas por una coma y cada mes aparecerá en una línea diferentes.

function diasMes($num_mes){
    if($num_mes==1 || $num_mes==4 || $num_mes==6 ||$num_mes==9 ||$num_mes==11){
        return 30;
    }else if($num_mes==3 || $num_mes==5 || $num_mes==7 ||$num_mes==8 ||   $num_mes==10 || $num_mes==12){
        return 31;
    }else{
        return 28;
    }
}
echo diasMes(1);
echo diasMes(2);
echo diasMes(3);

//echo "Fechas entre el 1 de enero de 1999 y el 31 de diciembre de 2012:  ";
$day = 1;
$month = 1;
$year = 1999;


for($i = 1999 ;$i <= 2012;$i++){
    echo $day."/".$month."/".$year;
    $day++;
    if($day>diasMes($month)){
      $day=1;
      $month++;    
      echo "<br>";
        if($month>12) {
            $year++;
            $month=1;
    }
}
 
}

?>
</body>
</html>



