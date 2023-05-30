<?php
require_once "controllers/controlador.php";

$reservaControlador = new ReservaControlador();
$reservaControlador->crear();
?>

<?php include "sections/header.html";?>