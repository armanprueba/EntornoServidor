<?php include "view/header.php";
session_start();

?>
<a href="view/form.php">Introducir una frase</a> <br>
<a href="view/list_frases.php">Ver todas las frases</a> <br><br>
<?php 
    if(isset($_SESSION["frases"])){
        $arrayFrases = unserialize($_SESSION["frases"]);
        echo count($arrayFrases)." frases introducidas";

    }


?>