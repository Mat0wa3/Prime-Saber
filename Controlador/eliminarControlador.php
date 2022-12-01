<?php

$conexion = Database::connect();
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" UPDATE usuario SET estado='inactivo' WHERE id='$id' ");
    if ($sql==1) {
        echo "<script>
        alert('Usuario Desactivado!');
        window.location = './principal.php?control=usuario';
        </script>";
    } else {
        echo "<script>alert('Error al Desactivar!')</script>";
    }
}

?>