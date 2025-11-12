<?php
    include "eliminarCookie.php";
    if(isset($_COOKIE["frases"])){
        eliminarCookie("frases");
    }
    else{
        header("../index.html");
    }

?>