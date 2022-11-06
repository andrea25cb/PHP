<?php
$texto_pregunta="";
$UNA_OPCION = 'radio';
$MULTI_OPCION = 'checkbox';

//CREAMOS LAS PREGUNTAS DE CADA OPCION 
$pregunta1=[
    'texto_pregunta'=>'Sexo:<br>',
    'tipo'=>$UNA_OPCION,
    'campo'=>'sexo',
    'respuestas'=>[
    ['etiqueta'=>'Hombre', 'valor'=>'H'],
    ['etiqueta'=>'Mujer', 'valor'=>'M']
    ]
];
        
$pregunta2=[
    'texto_pregunta'=>'Aficiones:<br>',
    'tipo'=>$MULTI_OPCION,
    'campo'=>'aficiones',
    'respuestas'=>[
    ['etiqueta'=>'Deporte', 'valor'=>'D'],
    ['etiqueta'=>'Cine', 'valor'=>'C'],
    ['etiqueta'=>'Teatro', 'valor'=>'T']
    ]
];

$pregunta3=[
    'texto_pregunta'=>'Estudios que tiene:<br>',
    'tipo'=>$MULTI_OPCION,
    'campo'=>'estudios',
    'respuestas'=>[
    ['etiqueta'=>'ESO', 'valor'=>'eso'],
    ['etiqueta'=>'C.F.G.Medio', 'valor'=>'medio'],
    ['etiqueta'=>'C.F.G.Superior', 'valor'=>'sup'],
    ['etiqueta'=>'Grado', 'valor'=>'grado']
    ]
];

$pregunta4=[
    'texto_pregunta'=>'Lugar al que le gustaría ir de vacaciones<br>',
    'tipo'=>$UNA_OPCION,
    'campo'=>'vacaciones',
    'respuestas'=>[
    ['etiqueta'=>'Mediterraneo', 'valor'=>'med'],
    ['etiqueta'=>'Caribe', 'valor'=>'car'],
    ['etiqueta'=>'EEUU', 'valor'=>'eeuu'],
    ['etiqueta'=>'Centro Europa', 'valor'=>'ceu']
    ]
];

//FUNCION PREGUNTA
function imprimirPregunta($pregunta){ //pregunta es un array
    $html="<p>".$pregunta['texto_pregunta']; 
    $varias_respuestas=($pregunta['tipo']=="checkbox") ? $pregunta['campo']."[]" : $pregunta['campo'];
    foreach($pregunta['respuestas'] as $respuesta){
        $html .= "\n".$respuesta['etiqueta'].'<input type="'.$pregunta['tipo'].'" name="'.$varias_respuestas.'" value="'.$respuesta['etiqueta'].'"><br>';
   
    }return $html;
}

?>