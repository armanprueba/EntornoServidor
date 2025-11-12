<?php
function eliminarCookie($nombreCookie) {
    $cookie_name = $nombreCookie;
    // Poner la barra para que la cookie este disponible en toda la web
    setcookie($cookie_name, "", time() - 3600, "/");
}