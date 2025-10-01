<?php
    // !empty comprueba que el campo no está vacío al contrario que isset
    if(!empty($_GET["cadena"]) || !empty($_GET["subcadena"])){ 
        $cadena = preg_replace(array("/a/", "/á/", "/à/"), "a", strtolower($_GET["cadena"]));
        $cadena = preg_replace(array("/í/", "/ì/"), "i", $cadena);
        $cadena = preg_replace(array("/ú/", "/ù/"), "u", $cadena);
        $cadena = preg_replace(array("/è/", "/é/"), "e", $cadena);
        $cadena = preg_replace(array("/ò/", "/ó/"), "e", $cadena);
        $cadena = (explode(" ",strtolower($cadena)));  //Me separa la cádena en un array por la condición de espacio que le paso
        $subcadena = preg_replace(array("/a/", "/á/", "/à/"), "a", strtolower($_GET["subcadena"]));
        $subcadena = preg_replace(array("/è/", "/é/"), "e", $subcadena);
        $subcadena = preg_replace(array("/í/", "/ì/"), "i", $subcadena);
        $subcadena = preg_replace(array("/ú/", "/ù/"), "u", $subcadena);
        $subcadena = preg_replace(array("/ò/", "/ó/"), "e", $subcadena);
        

        
        function contieneSubcadena ($cadena, $subcadena){
            return str_contains($cadena, $subcadena); //Comprueba si la cadena tiene la subcadena
        }

        function coincideSubcadena($cadena, $subcadena){
            $coincidencias = [];
            foreach($cadena as $palabra){

                if(contieneSubcadena($palabra, $subcadena)){
 

                   array_push($coincidencias, $palabra);//Le añado los valores al array
                   
                }
            }
            return $coincidencias;
        }

        $coincidencias = coincideSubcadena($cadena, $subcadena);
        
        if($coincidencias){
            echo "Se ha encontrado la subcadena ". $subcadena . " en: " . implode(", ", $coincidencias); //Convierto el array con una cádena que separa los valores con la condición que le pase
        }
        
    }else{
        header('Location: index.html');
    }