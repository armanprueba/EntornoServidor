<?php
    if(isset($_GET["x"]) && isset($_GET["y"]) && is_numeric($_GET["x"]) && is_numeric($_GET["y"])){ 
        $x = $_GET["x"];
        $y = $_GET["y"];
        $suma = 0;

        for($i=0; $i<=$x; $i++){
            if($i%$y == 0){
                $suma += $i;
            }
        }   
        
        echo $suma;
    }else{
        header('Location: index.html');
    }