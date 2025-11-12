<?php include "view/header.php"


?>
<a href="view/form.php">Introducir una frase</a> <br>
<a href="view/list_frases.php">Ver todas las frases</a> <br><br>
<?php 
    if(isset($_COOKIE["frases"])){
        $arrayFrases = unserialize($_COOKIE["frases"]);
        echo count($arrayFrases)." frases introducidas";

    }


?>