<?php

$vocales = ["a", "e", "o", "i", "u", "á", "é", "ó", "ó", "ú"];
$cadena = "Cadena del Barcelona";
$countVocals = 0;

function contarVocales($vocales, $cadena, &$countVocals){ //Hay que pasar por referencia en las funciones de PHP

    for($i = 0; $i<strlen($cadena); $i++){
        for($j = 0; $j<count($vocales); $j++){
        if($cadena[$i] == $vocales[$j]){
            $countVocals++;
        }
    }
    }

}

contarVocales($vocales, $cadena, $countVocals);

echo "El número de vocales de " . $cadena . " es ". $countVocals;

?>