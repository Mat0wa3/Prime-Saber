<?php
session_start();
session_destroy();
header("location: ../Vista/principal.php?control=ingresar");
$conexion = Database::connect();
?>