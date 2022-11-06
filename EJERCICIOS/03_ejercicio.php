
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 3</title>

</head>

<body>
<h1>Ejercicio 3</h1>

<?php
   $var1 = 57;
   $var2 = 1_234.566;
   $var3 = "PEPE";
   $var4 = true; 
?>
<?php

$data = array($var1, $var2, $var3, $var4);

foreach ($data as $value) {
    echo gettype($value), "\n";
}

?>

</body>
</html>
