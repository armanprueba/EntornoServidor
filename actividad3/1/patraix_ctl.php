<?php
if(isset($_POST["submit"])){
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        require_once("datos_patraix.php");
    if(isset($_POST["todos"])){
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        ?><h2>Bienvenido <?php echo $nombre. " ". $apellidos. " !"?></h2><?php


        
        ?><ul><?php 
        foreach($datos_patraix as $barrio){
            ?><li><?php echo $barrio[0]. ": ".  $barrio[1] ." hab."?></li><?php
            
        }
         ?>
        </ul><?php 
    }
    elseif(isset($_POST["barrios"])){ 
        $numero = $_POST["barrios"];
        for($i = 1; $i <= count($datos_patraix); $i++){
            if($numero == $i){
                ?><p><?php echo  "El barrio ".  $datos_patraix[$i][0]." tiene ". $datos_patraix[$i][1]. " habitantes."?></p><?php
            }      
        }

    }else{
        header('Location: index.html');
    }
    }
    else{
        header('Location: index.html');
    }
    ?>
    <br></br>
      <a href="menu.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Volver</a>