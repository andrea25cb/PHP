<?php

$texto_pregunta="";
$UNA_OPCION = 'radio';
$MULTI_OPCION = 'checkbox';

$pregunta1 = [
    "texto_pregunta" => "Sexo",
    'tipo'=>$UNA_OPCION,
    "campo" => 'sexo',
    "respuestas" => [
        ['etiqueta' => 'Hombre', 'valor' => 'H'],
        ['etiqueta' => 'Mujer', 'valor' => 'M']
    ]
];
$pregunta2 = [
    "texto_pregunta" => "Aficiones",
    'tipo'=>$MULTI_OPCION,
    "campo" => 'aficiones',
    "respuestas" => [
        ['etiqueta' => 'Deporte', 'valor' => 'deporte'],
        ['etiqueta' => 'Cine', 'valor' => 'cine'],
        ['etiqueta' => 'Teatro', 'valor' => 'teatro']
    ]
];
$pregunta3 = [
    "texto_pregunta" => "Estudios",
    'tipo'=>$MULTI_OPCION,
    "campo" => 'estudios',
    "respuestas" => [
        ['etiqueta' => 'ESO', 'valor' => 'ESO'],
        ['etiqueta' => 'C.F.G.Medio', 'valor' => 'CFGM'],
        ['etiqueta' => 'C.F.G.Superior', 'valor' => 'CFGS'],
        ['etiqueta' => 'Grado', 'valor' => 'Grado']
    ]
];
$pregunta4 = [
    "texto_pregunta" => "Lugar al que te gustaria ir de vacaciones",
    'tipo'=>$UNA_OPCION,
    "campo" => 'vacaciones',
    "respuestas" => [
        ['etiqueta' => 'Mediterraneo', 'valor' => 'mediterraneo'],
        ['etiqueta' => 'Caribe', 'valor' => 'caribe'],
        ['etiqueta' => 'EEUU', 'valor' => 'eeuu'],
        ['etiqueta' => 'Centro europa', 'valor' => 'Centro Europa']
    ]
];

//__________ nuevas preguntas:

$preguntaDeporte = [
    "texto_pregunta" => "Tipo de deporte que te gusta",
    'tipo'=>$MULTI_OPCION,
    "campo" => 'deporte',
    "respuestas" => [
        ['etiqueta' => 'Ciclismo', 'valor' => 'ciclismo'],
        ['etiqueta' => 'Tenis', 'valor' => 'tenis'],
        ['etiqueta' => 'Futbol', 'valor' => 'futbol'],
        ['etiqueta' => 'Baloncesto', 'valor' => 'baloncesto'],
        ['etiqueta' => 'Voleibol', 'valor' => 'voleibol']
    ]
];

$preguntaDestino = [
    "texto_pregunta" => "Destinos en el mediterráneo ",
    'tipo'=>$MULTI_OPCION,
    "campo" => 'destinos',
    "respuestas" => [
        ['etiqueta' => 'Cataluña', 'valor' => 'Cataluña'],
        ['etiqueta' => 'Valencia', 'valor' => 'Valencia'],
        ['etiqueta' => 'Andalucía', 'valor' => 'Andalucía'],
        ['etiqueta' => 'Tunez', 'valor' => 'Tunez'],
        ['etiqueta' => 'Turquía', 'valor' => 'Turquía'],
        ['etiqueta' => 'Italia', 'valor' => 'Italia'],
        ['etiqueta' => 'Francia', 'valor' => 'Francia']
    ]
];

//FUNCION PREGUNTA: 
function imprimirPregunta($pregunta){
    $html = "<p>" . $pregunta["texto_pregunta"] . " :</p>";
    if ($pregunta["tipo"] == 'radio') {
        for ($i = 0; $i < sizeof($pregunta["respuestas"]); $i++) {
            $html .= "<input type='radio' value=" . $pregunta["respuestas"][$i]["valor"] . " name='" . $pregunta["campo"] . "'>" . $pregunta["respuestas"][$i]["etiqueta"] . "<br>";
        }
    } else {
        for ($i = 0; $i < sizeof($pregunta["respuestas"]); $i++) {
            $html .= "<input type='checkbox' name='" . $pregunta["campo"] . "[]" . "' value='" . $pregunta["respuestas"][$i]["valor"] . "'>" . $pregunta["respuestas"][$i]["etiqueta"] . "<br>";
        }
    }
    return $html;
}


if (!$_GET) {
    echo "<form action='37_ejercicio_2.php'>";
    echo imprimirPregunta(($pregunta1));
    echo imprimirPregunta(($pregunta2));
    echo imprimirPregunta(($pregunta3));
    echo imprimirPregunta(($pregunta4));
    echo "<br>" . "<input type='submit' value='OK' id='enviar'>";
}

if ($_GET) {

    $deporte = false;
    $ESO = false;
    $mediterraneo = false;

    $sexo = "";

    $sexo = (isset($_GET['sexo'])) ? $_GET['sexo'] : "";

    $aficiones =  "";
    $estudios =  "";

    $aficiones = (isset($_GET['aficiones'])) ? $_GET['aficiones'] : "";
    $estudios = (isset($_GET['estudios'])) ? $_GET['estudios'] : "";

    //recorremos con foreach las preguntas multiopcion:
    $res_aficiones = "";
    $res_estudios = "";

    foreach ($aficiones as $valor) {
        if ($valor == "deporte") {
            $deporte = true;
        }
        $res_aficiones .= " $valor - ";
    }
    foreach ($estudios as $valor) {
        if ($valor == "ESO") {
            $ESO = true;
        }
        $res_estudios .= " $valor - ";
    }

    $vacaciones = "";
    $vacaciones = (isset($_GET['vacaciones'])) ? $_GET['vacaciones'] : "";

    if ($vacaciones == "mediterraneo") {
        $mediterraneo = true;
    }
//si no elige ninguna opcion imprime sin preguntas nuevas
    if ($mediterraneo == false && $deporte == false && $ESO == false) {
        include("37_ejercicio_3.php");
    } else {
//si elige alguna opcion se añadirán las preguntas nuevas correspondientes
        echo "<form action='37_ejercicio_4.php'>";
        if($deporte){
            echo imprimirPregunta($preguntaDeporte);
        }
        if($ESO){
            echo "<br>Año en el que obtuvo el titulo ";
            echo "<input type='text' name='ESO' value=''></input>";
        }
        if($mediterraneo){
            echo imprimirPregunta($preguntaDestino);
        }
        echo "<input type='text' name='sexo' value='$sexo' hidden></input>";
        echo "<input type='text' name='aficiones' value='$res_aficiones' hidden></input>";
        echo "<input type='text' name='estudios' value='$res_estudios' hidden></input>";
        echo "<input type='text' name='vacaciones' value='$vacaciones' hidden></input>";
        echo "<br>" . "<input type='submit' value='OK' id='enviar'>";
    }
}
