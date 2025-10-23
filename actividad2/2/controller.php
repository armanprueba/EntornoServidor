<?php
    if(isset($_GET["cadena"])){ 
        $vocales = ["a", "e", "o", "i", "u", "á", "é", "í", "ó", "ú", "à", "è", "ò", "ì", "ù", "ü"]; 
        $cadena = $_GET["cadena"];
        $countVocals = 0;
        function contarVocales($vocales, $cadena, &$countVocals){
            for($i = 0; $i<strlen($cadena); $i++){
                for($j = 0; $j<count($vocales); $j++){
                if($cadena[$i] == $vocales[$j]){
                    $countVocals++;
                    }
                }
            }      
        }

        contarVocales($vocales, $cadena, $countVocals);
        echo "El número de vocales de " . $cadena . " es " . $countVocals;
        
    }else{
        header('Location: index.html');
    }