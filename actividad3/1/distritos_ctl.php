<?php
    if(isset($_GET["todos"])){
        $nombre = $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        ?><h2>Bienvenido <?php echo $nombre. " ". $apellidos. " !"?></h2><?php


        require_once("datos_distritos.php");
        ?><ul><?php 
        foreach($datos_distritos as $distrito => $habitantes){
            ?><li><?php echo $distrito. ": ".  $habitantes ." hab."?><?php
            
        }
         ?>
        </ul><?php 
    }
    elseif(isset($_GET["distritos"])){ 
       $distritos = explode(" ", $_GET["distritos"]);
       $habitantes = $distritos[0];
       $nom_distrito = $distritos[1];
       
       echo "El distrito " . $nom_distrito . " tiene " . $habitantes . " habitantes";

    }else{
        header('Location: index.html');
    }
    ?>
    <br></br>
      <a href="menu.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Volver</a>