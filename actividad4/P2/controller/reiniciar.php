<?php
    include "eliminarCookie.php";
    session_start();
    if(isset($_SESSION["frases"])){
        session_destroy(); 
    }
    else{
        header("Location: ../index.php");
    }

?>