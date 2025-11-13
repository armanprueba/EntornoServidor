<?php

function crearCookie($nombreCookie, $valorCookie){
    setcookie($nombreCookie, $valorCookie, time() + (86400 * 30), "/");
}