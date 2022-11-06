<?php

if(is_uploaded_file( $_FILES['fichero']['tmp_name'])){
    $nombre_archivo = __DIR__.'/imagen.png';
    // $fich = "".time().$_FILES['fichero']['name'];
    move_uploaded_file($_FILES['fichero']['tmp_name'],$nombre_archivo);
    echo "FICHERO SUBIDO EXITOSAMENTE";
    echo "<br>FICHERO TEMPORAL: ".$_FILES['fichero']['tmp_name']."<br>";
    echo "<img src='imagen.png'>";
}
else{
    print("NO SE HA PODIDO SUBIR EL FICHERO\n");
}

?>