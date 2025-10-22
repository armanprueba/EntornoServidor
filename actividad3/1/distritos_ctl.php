<?php
    if(isset($_GET["todos"])){
        require_once("datos_distritos.php");
        ?><ul><?php ?>
        foreach($datos_distritos as $distrito => $habitantes){
            ?><li><?php ?>
        }
    ?><ul><?php ?>
    }
    elseif(isset($_GET["distritos"])){ 
       $distritos = explode(" ", $_GET["distritos"]);
       $habitantes = $distritos[0];
       $nom_distrito = $distritos[1];
       
       echo "El distrito " . $nom_distrito . " tiene " . $habitantes . " habitantes";

    }else{
        header('Location: index.html');
    }