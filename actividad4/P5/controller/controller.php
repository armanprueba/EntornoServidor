<?php
    require "crearCookie.php";
    if(isset($_POST["submit"])){
        if(isset($_POST["lengua"])){
            $lengua = $_POST["lengua"];
            if($lengua == "val"){
                crearCookie("val", $_POST["lengua"]);
                var_dump($_COOKIE["val"]);
            }
            else if($lengua == "cas"){
                crearCookie("cas", $_POST["lengua"]);
                var_dump($_POST["lengua"]);
                
            }
            else if($lengua == "ing"){

                
            }
        }
    }