<?php
//defino las variables
$sexo = "";
$aficiones =  "";
$estudios =  "";
$vacaciones = "";
$res_aficiones="";
$res_estudios="";

if ($_POST) {
  $sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : "";
  $aficiones = (isset($_POST['aficiones'])) ? $_POST['aficiones'] : "";
  $estudios = (isset($_POST['estudios'])) ? $_POST['estudios'] : "";
  $vacaciones = (isset($_POST['vacaciones'])) ? $_POST['vacaciones'] : "";
   //recorro con foreach las que tienen checkbox
  foreach ($aficiones as $valor) {
      $res_aficiones .= "<br>  - ".$valor;
  }
  foreach ($estudios as $valor) {
      $res_estudios .= "<br>  - ".$valor;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>36</title>
</head>
<body>
  <!-- SALDRÁ EL RESULTADO DEL USUARIO -->
  <span>Sexo: <?= $sexo?><br></span>
  <span>Aficiones: <?= $res_aficiones?><br></span>
  <span>Estudios: <?= $res_estudios?><br></span>
  <span>Vacaciones: <?= $vacaciones?><br></span>

</body>
</html>

