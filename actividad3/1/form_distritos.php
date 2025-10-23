<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
</head> 
<body> 
     <?php 
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    var_dump($nombre);

    ?>
    <form name="formulario" method="get" action="<?php echo "distritos_ctl.php?nombre=". $nombre . "&apellidos=". $apellidos ?>">
      <label for="lang">Lenguaje</label>
      <select name="distritos" id="distritos">;
        <?php
            require "datos_distritos.php";
            /* Si se hace  $distrito => $habitantes se coge también el nombre del distrito, 
               con solo $distrito solo cogemos el número de habitantes del distrito*/
            foreach($datos_distritos as $distrito => $habitantes){
                /*if(strtolower($distrito) == "patraix"){*/
                if($distrito == "Patraix"){
                    ?><option value="<?php echo $habitantes . " " . $distrito?>" selected><?php echo $distrito ?> </option><?php
                }
                else {
                ?><option value="<?php echo $habitantes . " " . $distrito?>"><?php echo $distrito ?> </option><?php
                }
            }
        ?>
      </select>
      <input type="checkbox" name="todos" id="todos" value="todos" />
      <input type="submit" value="Enviar" />
</form>
</body> 
</form> 
</html> 

