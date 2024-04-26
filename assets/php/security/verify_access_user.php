<?php
// Comprueba si el usuario ha iniciado sesión
if (!isset($_SESSION['business_correo_electronico'])) {
    // Si no ha iniciado sesión, redirige al usuario a index.html
    header("Location: https://clipmenu.uixsoftware.com/");
    exit();
}
?>