<!-- Se desea realizar un visor de fotos “cutre” que nos permita ver en el navegador
fotos/imágenes que subiremos con un formulario. En la pantalla 1 pediremos el fichero que
deseamos mostrar, y en la pantalla 2 mostraremos el fichero que hemos seleccionado
 -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>40</title>
    </head>
    <body>
<h1>Subimos ficheros a resu.php</h1>
        <form method="post" enctype="multipart/form-data" action="40_resu.php">
            <input type="file" name="fichero" accept=".png, image/png">
            <!-- el accept hace que cuando busque una imagen, solo me muestren las de tipo .png -->
            <button name="button" type="submit">Enviar</button>
        </form>
    </body>
</html>
