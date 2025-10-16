<?php
    if(isset($_POST["dni"]) && isset($_POST["nombre"]) && isset($_POST["apellidos"])){ 
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];

        include('validar_ctl.php');

    }else{
        header('Location: index.html');
    }