<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>34</title>
</head>
<body>
<form>

<?php
$contador=0;

if($_POST){
    $contador = (isset($_POST['num'])) ? $_POST['num']: '';
    $contador++;
}

 ?>
<input type="hidden" name="num" id="" value="<?=$contador?>">
<p><?=$contador?></p>
<input type="submit" name="boton" value="+1">
  
</form>
    
</body>
</html>