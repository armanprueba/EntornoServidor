<?php
include "crearCookie.php";
session_start();
if(isset($_POST["submit"])){
    $frase = $_POST["frase"];
    $arrayFrases = [];
    if(!isset($_SESSION["frases"])){
        array_push($arrayFrases, $frase);
        /*var_dump($arrayFrases);
        var_dump(serialize($arrayFrases));
        var_dump(unserialize(serialize($arrayFrases)));*/
        crearCookie("frases", serialize($arrayFrases));
        header("Location: ../index.php");


    }else{
        $arrayFrases = unserialize($_SESSION["frases"]);
        array_push($arrayFrases, $frase);
        crearCookie("frases", serialize($arrayFrases));
        //var_dump($arrayFrases);
        echo "Frase introducida";
        header('Refresh: 5; URL=../index.php');
    }
}