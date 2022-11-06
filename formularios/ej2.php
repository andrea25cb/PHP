<?php
include('utilsforms.php');

/*
 * Si es la 1ª vez
 *     Muestro el formulario vacio
 * sino
 *     Estoy recibiendo datos
 *     Filtro los datos
 *     si hay error
 *       Muestro el fomulario con errores y los campos cargados
 *     sino 
 *       muestro el resultado
 * Fsi
 */
$errores=[];

if (! $_POST) {
    // es la 1ª vez
    include("ej2_form.php");
}
else {
    $edad=ValorPost('edad');
    if (!is_numeric($edad)) {
      $errores['edad']="No es un número";
    } else if ($edad<18) {
      $errores['edad']="Debe ser mayor = 18";
    } 
    if (ValorPost('nombre')=='') {
      $errores['nombre']="Introduzca un nombre";
    }
    if ($errores)  {
        include ("ej2_form.php");
    }
    else {
        include('ej2_resu.php');
    }
}



