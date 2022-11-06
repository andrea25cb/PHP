<?php
//Crea la función NombreMes(num_mes) que devolverá una cadena que será el nombre de mes que corresponde al parámetro. 

function nombreMes($numMes){
    switch($numMes){
        case 1: echo "Enero "; break;
        case 2: echo "Febrero "; break;
        case 3: echo "Marzo "; break;
        case 4: echo "Abril "; break;
        case 5: echo "Mayo "; break;
        case 6: echo "Junio "; break;
        case 7: echo "Julio "; break;
        case 8: echo "Agosto "; break;
        case 9: echo "Septiembre "; break;
        case 10: echo "Octubre "; break;
        case 11: echo "Noviembre "; break;
        case 12: echo "Diciembre "; break;
    }
}

//echo nombreMes(1);
//Modifica el ejercicio anterior para que en cada línea aparezca el nombre de mes y el año
//y a continuación solo aparezca el número de días. (calendario)

function calendario($month){
    $year = date("Y");
    $diaActual = date("j");
    $diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year)) + 7;
    $ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));

     ?>
        <table id="calendar">
          <?php echo nombreMes($month) . " " . $year ?>
                    <?php
                    $last_cell = $diaSemana + $ultimoDiaMes;

                    for ($i = 1; $i <= 42; $i++) {
                        if ($i == $diaSemana) {
                            // determinamos en que dia empieza
                            $day = 1;
                        }
                        if ($i < $diaSemana || $i >= $last_cell) {
                            // celca vacia
                            echo "<td>&nbsp;</td>";
                        } else {
                            // mostramos el dia
                            if ($day == $diaActual)
                                echo "<td class='hoy'><a href = '../../Controlador/controlador.php?dia=''' class='btn btn-light' name = 'dia' id = 'dia' > ".$day."</a></td>";
                            else
                                echo "<td>$day</td>";
                            $day++;
                        }
                        // cuando llega al final de la semana, iniciamos una columna nueva
                        if ($i % 7 == 0) {
                            echo "</tr><tr>\n";
                        }
                    }
                }

             echo calendario(1);
?>