<?php
/*Realiza una web que lea un número y muestre su tabla de multiplicar. La aplicación debe
cumplir los siguientes requisitos:
• El formulario se mostrará y procesará en una única URL (un solo fichero, o varios
con include/require).
• Si el valor introducido no es un número, o si no está en el rango 1..10 mostraremos
un mensaje de error notificando dicha incidencia y dando la opción de introducir de
nuevo el valor.
• Se mostrarán en los campos el valor erróneo para que el usuario pueda ver el valor
introducido.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>29</title>
</head>
<body>
    <h1>TABLAS MULTIPLICAR</h1>

<form action="29_ejercicio.php" method="POST">
Número: <input type="text" name="numero" value="<?=isset($_POST['numero']) ? $_POST['numero']:''?>">

<input type="submit" value="imprimir tabla">
</form>
<br>
<?php
if($_POST){
    $numero = isset($_POST['numero'])? $_POST['numero'] : '';
    if(empty($numero)){
        echo "CAMPO NO PUEDE ESTAR VACÍO <br>";
    }elseif(is_numeric($numero)){
        if($numero>10){
                echo "EL NÚMERO TIENE QUE SER DEL 1 AL 10 <br>";
        }else{
                for($multiplicador=1; $multiplicador <=10 ; $multiplicador++){
                    echo $numero. " x " . $multiplicador . " = " . $numero * $multiplicador."<br>";}
            }
    }else{
        echo "DEBES INTRODUCIR UN NÚMERO";
    }

}
?>

</body>
</html>