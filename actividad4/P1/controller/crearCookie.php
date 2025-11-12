<?php
function crearCookie($nombreCookie, $valorCookie) {
    $cookie_name = $nombreCookie;
    $cookie_value = $valorCookie;
    // Poner la barra para que la cookie este disponible en toda la web
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}