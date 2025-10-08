<?php



        function comprobar_DNI($dni){
            $letras = [
            "T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E","T",
            ];
            $numeros_dni = substr($dni, 0, 8);
            $letra_dni = $dni[8];

            $resto = $numeros_dni % 23;

            if (!ctype_digit($numeros_dni) || !ctype_alpha($letra_dni) || strlen($dni) != 9 || $letra_dni != $letras[$resto]) {
            
                return false;
            }
            else{
                return true;
            }
        }

        if (comprobar_DNI($dni)){
             header('Location: menu.php?nombre='. $nombre. "&apellidos=". $apellidos);
        }
        else{
            header('Location: index.html');
        }







?>