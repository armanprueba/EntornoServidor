<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            height: 100vh;
            /* Como 100% pero funcional*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        </style>
</head>
<body>
    <?php
        $suma_div_3 = 0;

        for($i=1; $i<=50; $i++){
                if($i%3 == 0){
                    $suma_div_3 = $suma_div_3 + $i;
                }
            }
             
        /*    
        $i = 1;
        while($i<=50){
            if($i%3 == 0){
                $suma_div_3 = $suma_div_3 + $i;
            }
            $i++;
        }*/

        /*do{
            if($i%3 == 0){
                $suma_div_3 = $suma_div_3 + $i;
            }
            $i++;
        }
        while($i<=50)*/
    ?>
    <div id="container">Suma de todos los números del 1 al 50 que sean divisibles por 3:<?php    echo($suma_div_3)?><div> 
  
</body>
</html>