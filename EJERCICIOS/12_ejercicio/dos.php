<?php
/* En un segundo fichero “dos.php”
incluirás el fichero “uno.php” (con include o require) y usarás dichas variables como si ya
estuviesen declaradas en “uno.php” */

include 'uno.php';

echo $var1+$var2;


?>