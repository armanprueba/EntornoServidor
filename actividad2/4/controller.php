<?php
    if(isset($_GET["cadena"]) || isset($_GET["subcadena"])){ 
        
        $cadena = (explode(" ",strtolower($_GET["cadena"])));  //Me separa la cádena en un array por la condición de espacio que le paso
        $subcadena = strtolower($_GET["subcadena"]);
        

        
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