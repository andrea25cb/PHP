<?php
$edad=edad($_POST['fecha']);

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
            <th>Edad</th>
        </tr>
        <tr>
            <td>".$_POST['nombre']."</td>
            <td>".$_POST['apellidos']."</td>
            <td>".$_POST['sexo']."</td>
            <td>".$_POST['curso']."</td>
            <td>".$_POST['fecha']."</td>
            <td>$edad</td>
    
        </table>";
}

function edad($fecha_nacimiento)
{
    $nacimiento = new DateTime($fecha_nacimiento);
    $ahora = new DateTime(date("Y-m-d"));
    $diferencia = $ahora->diff($nacimiento);
    return $diferencia->format("%y");
}
?>