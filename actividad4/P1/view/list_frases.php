<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Guardar una frase en una cookie</h1>
    <h2>Frases introducidas</h2>
    <?php 
        if(isset($_COOKIE["frases"])){
            $frases = unserialize($_COOKIE["frases"]);
            foreach($frases as $frase){
                echo "<p>". $frase. "</p>";
            }
        }
    ?>
    <a href="../index.php">Inicio</a><br><br>
    <?php
    if(isset($_COOKIE["frases"])){
        ?><a href="../controller/reiniciar.php">Borrar</a> <?php
    }
    
    ?>

</body>
</html>