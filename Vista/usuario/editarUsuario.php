<?php

include("../../Modelo/db.php");
$conexion = Database::connect();

$id = $_GET['id'];

$sql = $conexion->query("SELECT * FROM usuario WHERE id=$id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="shortcut icon" href="../../assets/img/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/SignUp.css">
</head>
<body>

    <form action="" method="post" class="formulario">
        <h2 class="create-account">Editar</h2>
        <input type="hidden" name="id" value="<?= $_GET['id']?>" >
        <?php
        include("../../Controlador/actualizarControlador.php");
        while ($datos=$sql->fetch_object()) {

        ?>
        <input name="nombre" type="text" placeholder="Nombres" value="<?= $datos->nombre?>">
        <input type="text" name="apellido" placeholder="Apellidos" value="<?= $datos->apellido?>">
        <input name="email" type="email" placeholder="Correo" value="<?= $datos->mail?>">
        <select name="rol">
            <option value="" disabled selected>Selecciona tu cargo</option>
            <option value="profesor">Profesor</option>
            <option value="estudiante">Estudiante</option>
        </select>
        <select name="estado">
            <option value="" disabled selected>Estado de la cuenta</option>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
        <input name="actualizar" type="submit" value="Actualizar">
    </form>
        <?php

        }

        ?>

</body>
</html>