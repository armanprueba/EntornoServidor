<?php
    if(isset($_POST["todos"])){
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        ?><h2>Bienvenido <?php echo $nombre. " ". $apellidos. " !"?></h2><?php


        require_once("datos_patraix.php");
        ?><ul><?php 
        foreach($datos_patraix as $barrio){
            ?><li><?php echo $barrio[0]. ": ".  $barrio[1] ." hab."?><?php
            
        }
         ?>
        </ul><?php 
    }
    elseif(isset($_POST["barrios"])){ 
        var_dump($_POST["barrios"]);
       $numero = $_POST["barrios"];
       


    }else{
        header('Location: index.html');
    }
    ?>
    <br></br>
      <a href="menu.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Volver</a>