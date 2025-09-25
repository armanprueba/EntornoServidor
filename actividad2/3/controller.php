<?php
    if(isset($_GET["cadena"])){ 
        
        $cadena = (explode(" ",$_GET["cadena"])); //Me separa la cádena en un array por la condición de espacio que le paso
        
        $palabraMayor = "";
        $palabraMenor = "";
        $cuentaMayor = 0;
        $cuentaMenor = 0;

        function contarVocales($cadenaSeparada){
            $vocales = ["a", "e", "o", "i", "u", "á", "é", "í", "ó", "ú", "à", "è", "ò", "ì", "ù", "ü"]; 
            $countVocals = 0;
            for($i = 0; $i<strlen($cadenaSeparada); $i++){
                for($j = 0; $j<count($vocales); $j++){
                if($cadenaSeparada[$i] == $vocales[$j]){
                    $countVocals++;
                    }
                }
            }   
            return $countVocals;
        }

        function VocalesMayores($cadena, &$palabraMayor, &$palabraMenor, &$cuentaMayor, &$cuentaMenor){
            $vocalsWord = "";
            $palabraMenor = $cadena[0];
            foreach($cadena as $palabra){
                $vocalsWord = contarVocales($palabra);
                if($vocalsWord>$palabraMayor){
                    $cuentaMayor = $vocalsWord;
                    $palabraMayor = $palabra;

                }
                if($vocalsWord<$palabraMenor){
                    $cuentaMenor = $vocalsWord;
                    $palabraMenor = $palabra;
                }
            }
        }

        VocalesMayores($cadena, $palabraMayor, $palabraMenor, $cuentaMayor, $cuentaMenor);
        echo "La palabra con mas vocales es: " . $palabraMayor . " (". $cuentaMayor . ")<br>";
        echo "La palabra con menos vocales es: " . $palabraMenor . " (". $cuentaMenor . ")";
    }else{
        header('Location: index.html');
    }