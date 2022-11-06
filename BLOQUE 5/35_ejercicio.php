<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>35</title>
</head>
<body>
<form action="35_ejercicio.php" method="POST">

<h2>Calculadora</h2>
<p>Operador 1: <input type="number" name="num1" id="num1" value="<?= isset($_POST['num1']) ? $_POST['num1'] : '' ?>">
</p>
<p>Operador 2: <input type="number" name="num2" id="num2" value="<?=isset($_POST['num2']) ? $_POST['num2']: ''?>">
</p>
<p>Operación:  <input type="text" name="op" value="<?=isset($_POST['op']) ? $_POST['op']: ''?>"> 
[+],  [-],  [*],  [/]</p>

Resultado: <span name="res" value="<?=isset($_POST['res']) ? $_POST['res']: ''?>"></span>
<?php

$op = $_POST['op'];

if($op =="+"){
  echo $_POST['res']= $_POST['num1']+$_POST['num2'];
}
if($op =="-"){
    echo $_POST['res']= $_POST['num1']-$_POST['num2'];
}
if($op =="*"){
    echo $_POST['res']= $_POST['num1']*$_POST['num2'];
}
if($op =="/"){
    echo $_POST['res']= $_POST['num1']/$_POST['num2'];
}


?>
<br><br>
<input type="submit" name="boton" value="calcular">
   
</form>
    
</body>
</html>