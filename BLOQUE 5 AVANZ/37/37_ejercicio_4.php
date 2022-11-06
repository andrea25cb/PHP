<?php
//defino las variables
$sexo = "";
$aficiones =  "";
$estudios =  "";
$vacaciones = "";
$ESO = "";

$deportes = "";
$res_deportes = "";

$destino = "";
$res_destino = "";

//comprobamos
$sexo = (isset($_GET['sexo'])) ? $_GET['sexo'] : "";
$aficiones = (isset($_GET['aficiones'])) ? $_GET['aficiones'] : "";
$estudios = (isset($_GET['estudios'])) ? $_GET['estudios'] : "";
$vacaciones = (isset($_GET['vacaciones'])) ? $_GET['vacaciones'] : "";
$ESO = (isset($_GET['ESO'])) ? $_GET['ESO'] : "";
$deportes = (isset($_GET['deporte'])) ? $_GET['deporte'] : "";
$destino = (isset($_GET['destinos'])) ? $_GET['destinos'] : "";

//recorro con foreach las que tienen checkbox
if (isset($_GET['deporte'])) {
    foreach ($deportes as $valor) {
        $res_deportes .= "<br> - $valor ";
    }
}
if (isset($_GET['destinos'])) {
    foreach ($destino as $valor) {
        $res_destino .= "<br> - $valor  ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>37 resultado</title>
</head>
<body>
    <!-- imprimo las respuestas de las preguntas añadidas  -->
    <?php
    echo "<p>Sexo : $sexo </p>";
    echo "<p>Aficiones : $aficiones</p>";
    if (isset($_GET['deporte'])) {
        echo "<p> Deportes: $res_deportes </p>";
    }
    echo "<p>Estudios : $estudios</p>";
    if (isset($_GET['ESO'])) {
        echo "<p>Año en el que se saco la ESO: $ESO </p>";
    }
    echo "<p>Vacaciones : $vacaciones</p>";
    
    if (isset($_GET['destinos'])) {
        echo "<p> Destinos del mediterráneo: $res_destino </p>";
    }
    ?>
</body>
</html>