<?php

$nombre_archivo = $_FILES['fichero']['name'];
if(is_uploaded_file($_FILES['fichero']['tmp_name'])){
   	if (move_uploaded_file($_FILES['fichero']['tmp_name'], $nombre_archivo)){
        //Una vez subido, genero un página un enlace al fichero subido
       echo "FICHERO SUBIDO EXITOSAMENTE<br>";
       echo 'Enlace del fichero: <a href="'.$nombre_archivo.'" class="linkli">'.$nombre_archivo."</a>";
       }
}else{
    print("NO SE HA PODIDO SUBIR EL FICHERO\n");
}

?>