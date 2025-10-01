<?php
    if(isset($_POST["dni"]) && isset($_POST["nombre"]) && isset($_POST["apellidos"])){ 
        $dni = $_POST["dni"];
        

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];

        echo "HOla";

        function comprobar_DNI($dni){
            $vocales_dni = substr($dni, 0, 7);
            $numero_dni = $dni[0];
            if (ctype_digit($numero_dni) || ctype_alpha($vocales_dni) || strlen($dni) != 9) {
            echo "Dni incorrecto";
        }
        }

        
    }else{
        header('Location: index.html');
 
    }