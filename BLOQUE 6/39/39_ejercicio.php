<!-- Modifica el programa anterior para que una vez subido el fichero muestre su contenido en
el navegador.
Véase la función readfile() -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>39</title>
</head>
<body>

<form action="39_resu.php" method="post" enctype="multipart/form-data">
    <b>Enviar un nuevo archivo: </b>
    <br>
    <input name="fichero" type="file" value="<?=isset($_POST['fichero']) ? $_POST['fichero']: ''?>">
    <br>
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>