<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>30</title>
</head>

<body>
    <h1>DATOS PERSONALES</h1>
    <?php

if(isset($_POST['nombre'])){  
}if(isset($_POST['apellidos'])){
}if(isset($_POST['sexo'])){
}if(isset($_POST['curso'])){
}if(isset($_POST['fecha'])){

    echo "<table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Sexo</th>
            <th>Curso</th>
            <th>Fecha</th>
        </tr>
        <tr>
            <td>".$_POST['nombre']."</td>
            <td>".$_POST['apellidos']."</td>
            <td>".$_POST['sexo']."</td>
            <td>".$_POST['curso']."</td>
            <td>".$_POST['fecha']."</td>
    
        </table>";
}
else{
?>
    <form action="30_ejercicio.php" method="POST">
        <p>Nombre: <input type="text" name="nombre"></p> <p>Apellidos: <input type="text" name="apellidos"></p><p>Sexo:
        <label>Mujer<input type="radio" name="sexo" value="Mujer"></label> <label>Hombre<input type="radio" name="sexo" value="Hombre"></label>
    
    </p>Curso:
    <select id="curso" name="curso">
        <option></option>
        <option>1ºSMR</option>
        <option>2ºSMR</option>
        <option>1ºASIR</option>
        <option>2ºASIR</option>
        <option>1ºDAW</option>
        <option>2ºDAW</option>
    </select>

   <p>Fecha nacimiento:
        <input type="date" name="fecha"><br><br></p> 
        <input type="submit" value="Guardar">
    </form>

    <?php
}
?>
</body>

</html>