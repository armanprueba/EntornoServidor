<?php
    include "eliminarCookie.php";
    if(isset($_COOKIE["frases"])){
        eliminarCookie("frases");
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");
    }

?>