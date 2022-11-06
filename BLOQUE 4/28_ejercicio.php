
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>28</title>
</head>

<body>
    <h1>DATOS PERSONALES</h1>
    <?php
if(isset($_POST['nombre'])){
        echo "Nombre: ".$_POST['nombre']."<br>";
}if(isset($_POST['apellidos'])){
    echo "Apellidos: ".$_POST['apellidos']."<br>";

?><br>
<a href="28_ejercicio.php">Volver a formulario</a>
<?php
}else{
?>
<form action="28_ejercicio.php" method="POST">
Nombre: <input type="text" name="nombre"><br>
Apellidos: <input type="text" name="apellidos">
<input type="submit" value="aceptar">

</form>

    <?php
}

?>
</body>

</html>