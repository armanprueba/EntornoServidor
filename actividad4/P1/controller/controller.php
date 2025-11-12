<?php
include "crearCookie.php";
if(isset($_POST["submit"])){
    $frase = $_POST["frase"];
    $arrayFrases = [];
    if(!isset($_COOKIE["frases"])){
        array_push($arrayFrases, $frase);
        /*var_dump($arrayFrases);
        var_dump(serialize($arrayFrases));
        var_dump(unserialize(serialize($arrayFrases)));*/
        crearCookie("frases", serialize($arrayFrases));
        header("Location: ../index.php");


    }else{
        $arrayFrases = unserialize($_COOKIE["frases"]);
        array_push($arrayFrases, $frase);
        crearCookie("frases", serialize($arrayFrases));
        //var_dump($arrayFrases);
        echo "Frase introducida";
        header('Refresh: 5; URL=../index.php');
    }
}