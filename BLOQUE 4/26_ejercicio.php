<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>26</title>
</head>
<body>
<?php
/*. Realiza una web que lea un número y muestre su tabla de multiplicar. */

$numero = $_REQUEST['numero'];

for($multiplicador=1; $multiplicador <=10 ; $multiplicador++)

	echo "$numero" . " x " . $multiplicador . " = " . $numero * $multiplicador."<br>";

?>
</body>
</html>