<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>31</title>
</head>

<body>
    <h1>DATOS PERSONALES</h1>
    <?php

function VerError($campo) {
    global $errores;
    if (isset($errores[$campo])) {
        return '<span style="color:red">'.$errores[$campo].'</span>';
    }
    else {
        return '';
    }
}

      $errores=[];

        if ($_POST) {   
             // Han enviado datos
            // Filtro datos
             if (filter_input(INPUT_POST, 'nombre')=='') {
                $errores['nombre']='No puede estar vacío';
             }
            if (filter_input(INPUT_POST, 'apellidos')=='') {
                 $errores['apellidos']='No puede estar vacío';
             }
             if (filter_input(INPUT_POST, 'sexo')==''){
                 $errores['sexo']='Debe seleccionar un sexo';
             }    
             if (filter_input(INPUT_POST, 'curso')=="") {
                 $errores['curso']='Hay que seleccionar un curso';
             }
             if (filter_input(INPUT_POST, 'fecha')=='') {
                $errores['fecha']='Hay que seleccionar una fecha';
             }
        
             if ($errores /* count($errores)>0*/ ) {
                  include('31_ejercicio_vista.php');
              }
              else {
                  include('31_ejercicio_resu.php');
              }

        }else {
    // Es la primera vez
    include('31_ejercicio_vista.php');
        }

?>

</body>

</html>