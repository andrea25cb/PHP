<!-- Realiza una página que nos permita subir un fichero a través de un formulario. Una vez
subido generará una página que contendrá un enlace al fichero subido. El fichero lo guardaremos en la misma carpeta que está el script PHP.  -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>38</title>
</head>
<body>

<form action="38_resu.php" method="post" enctype="multipart/form-data">
  
    <p><b>Enviar un nuevo archivo:</b></p>
    <input name="fichero" type="file" value="<?=isset($_POST['fichero']) ? $_POST['fichero']: ''?>">
    <p><input type="submit" value="Enviar"></p>
</form>
    
</body>
</html>