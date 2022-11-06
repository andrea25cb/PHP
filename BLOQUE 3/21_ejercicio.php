<?php
/**21. Se desea almacenar información sobre coches, para cada coche se almacenaran las
siguientes características (atributos):
• matrícula
• color
• modelo
• marca
Realiza un array que almacene información de 5 o más coches.
Crea la función MuestraCoche($coche), donde $coche será un array que contiene los
atributos.
Realiza la función MuestraCoches($lista) que mostrará por pantalla información de
los coches almacenados.
Añade dos coches adicionales al array, después de mostrar, y vuelve a mostrar toda la
lista.
Nota: Se utilizará un array para almacenar la información de cada coche. Los indices,
serán el nombre de los atributos que deseamos almacenar. Esto se puede hacer también
utilizando objetos (clases).
 */

$coches=[
    ['matricula'=>'1234','color'=>'verde','modelo'=>'modelo1','marca'=>'marca1'],
    ['matricula'=>'5678','color'=>'rojo','modelo'=>'modelo2','marca'=>'marca2'],
    ['matricula'=>'9101','color'=>'azul','modelo'=>'modelo3','marca'=>'marca3'],
    ['matricula'=>'1213','color'=>'rojo','modelo'=>'modelo4','marca'=>'marca4'],
];

function MuestraCoche($coche){
    echo "<br> - MATRICULA: ".$coche['matricula']."<br> - COLOR: ".$coche['color']."<br> - MODELO: ".$coche['modelo']."<br> - MARCA:".$coche['marca']."<br>";
}

function MuestraCoches($coches){
    foreach($coches as $coche)
    MuestraCoche($coche);
   
}

MuestraCoches($coches);



?>