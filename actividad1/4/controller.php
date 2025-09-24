<?php
    if(isset($_GET["asteriscos"])){ 

        $asteriscos = $_GET["asteriscos"];
     

        function printAsteriscos($asteriscos){
        for($i=1; $i<=$asteriscos; $i++){
                for($j=1; $j<=$i; $j++){
                    echo "*";
                }
                echo "<br>";
            }
        }  

        printAsteriscos($asteriscos);
    }else{
        header('Location: index.html');
    }