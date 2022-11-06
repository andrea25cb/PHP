<?php
//defino las variables
$sexo = "";

$aficiones =  "";
$estudios =  "";

$vacaciones = "";
$res_aficiones = "";
$res_estudios = "";

if ($_GET) {
    $sexo = (isset($_GET['sexo'])) ? $_GET['sexo'] : "";

    $aficiones = (isset($_GET['aficiones'])) ? $_GET['aficiones'] : "";
    $estudios = (isset($_GET['estudios'])) ? $_GET['estudios'] : "";

    $vacaciones = (isset($_GET['vacaciones'])) ? $_GET['vacaciones'] : "";
    
    //recorro con foreach las que tienen checkbox
    foreach ($aficiones as $valor) {
        $res_aficiones .= " - $valor ";
    }
    foreach ($estudios as $valor) {
        $res_estudios .= " - $valor ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- respuestas  -->
    <span>Sexo: <?= $sexo?><br></span>
    <span>Aficiones: <?= $res_aficiones?><br></span>
    <span>Estudios: <?= $res_estudios?><br></span>
    <span>Vacaciones: <?= $vacaciones?><br></span>

</body>

</html>