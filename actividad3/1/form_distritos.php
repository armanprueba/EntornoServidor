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

    ?>
    <form name="formulario" method="get" action="distritos_ctl.php">
      <label for="lang">Distrito</label>
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
      <!--  Hay que poner las variables que pasemos como query string como parametros ocultos 
        para que no los borre al enviarse el form-->
      <input type="hidden" name="nombre" value="<?php echo $nombre?>" /> 
      <input type="hidden" name="apellidos" value="<?php echo $apellidos?>" /><br> 
      <label for="lang">Todos los distritos:</label>
      <input type="checkbox" name="todos" id="todos" value="todos" /><br> 
      <input type="submit" value="Enviar" />
      <br></br>
      <a href="menu.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Volver</a>
</form>
</body> 
</form> 
</html> 

