<?php
session_start();
session_destroy();
header("location: ../Vista/usuario/SignUp.php");
$conexion = Database::connect();
?>