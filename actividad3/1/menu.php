<!DOCTYPE html>
<html lang="en">
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
<h2>Bienvenido <?php echo $nombre . " " . $apellidos?><h2>
            

<a href="form_distritos.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Datos por distritos</a> <br>
<a href="form_patraix.php?nombre=<?php echo $nombre ?>&apellidos=<?php echo $apellidos?>"> Datos por barrios (Distrito de patraix)</a>



</body>
</html>

