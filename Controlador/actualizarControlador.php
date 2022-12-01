<?php

$conexion = Database::connect();
if (!empty($_POST["actualizar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["email"]) and !empty($_POST["rol"]) and !empty($_POST["estado"])) {
        $id=$_POST['id'];
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellido"];
        $email=$_POST["email"];
        $rol=$_POST["rol"];
        $estado=$_POST["estado"];
        $sql=$conexion->query(" UPDATE usuario SET nombre='$nombre', apellido='$apellidos', mail='$email', rol='$rol', estado='$estado' WHERE id='$id' ");
        if ($sql==1) {
            header("location: ./principal.php?control=usuario ");
        } else {
            echo "<div class='error'>Error al modificar!</div>";
        }
    } else {
        echo "<div class='error'>Hay campos vacios!</div>";
    }
}

?>