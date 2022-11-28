<?php

$conexion = Database::connect();

$id = $_GET['id'];

$sql = $conexion->query("SELECT * FROM usuario WHERE id=$id");

?>

<form action="" method="post" class="formulario">
    <h2 class="create-account">Editar</h2>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <?php
    include("../Controlador/actualizarControlador.php");
    $datos = $sql->fetch_object();
    ?>
    <input name="nombre" type="text" placeholder="Nombres" value="<?= $datos->nombre ?>">
    <input type="text" name="apellido" placeholder="Apellidos" value="<?= $datos->apellido ?>">
    <input name="email" type="email" placeholder="Correo" value="<?= $datos->mail ?>">
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