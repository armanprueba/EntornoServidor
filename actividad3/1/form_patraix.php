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
    require_once("datos_patraix.php");
    ?>

    <form name="formulario" method="post" action="patraix_ctl.php">
      <label for="lang">Barrio</label>
      <select name="barrios" id="barrios">;
        <?php
            /* Si se hace  $barrio => $numero se coge también el nombre del barrio, 
               con solo $barrio solo cogemos el número de numero del barrio*/
            foreach($datos_patraix as $numero => $barrio){
                var_dump($numero);
                    ?><option value="<?php echo $numero?>" selected><?php echo $barrio[0] ?> </option><?php
                }

        ?>
      </select>
      <!--  Hay que poner las variables que pasemos como query string como parametros ocultos 
        para que no los borre al enviarse el form-->
      <input type="hidden" name="nombre" value="<?php echo $nombre?>" /> 
      <input type="hidden" name="apellidos" value="<?php echo $apellidos?>" /><br> 
      <label for="lang">Todos los barrios:</label>
      <input type="checkbox" name="todos" id="todos" value="todos" /><br> 
      <input type="submit" name="submit" value="Enviar" />
      </form>
      <br></br>
      <a href="menu.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Volver</a>
</body> 

</html> 

