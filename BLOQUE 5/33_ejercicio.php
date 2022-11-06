<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>33</title>
</head>
<body>
    <form>

<p>Introduce un número</p>
<input type="text" name="num" id="" value="<?php 
if (isset($_GET['num'])){
    echo $_GET['num']+1;
} 
?>"/>
<input type="submit" name="boton" value="+1">
   
    </form>

    
</body>
</html>