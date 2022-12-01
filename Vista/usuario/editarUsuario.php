<?php

$conexion = Database::connect();

$id = $_GET['id'];

$sql = $conexion->query("SELECT * FROM usuario WHERE id=$id");

?>

<div class="container">
        <a href="./principal.php?control=usuario" class="btn__back">
            <i class="fa-solid fa-circle-left"></i>
            <h3>Volver</h3>
        </a>
        <div class="forms__container">
            <div class="signin-signup">
                <form action="" method="post" class="sign-in-form">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <?php
                include("../Controlador/actualizarControlador.php");
                $datos = $sql->fetch_object();
                ?>
                <div class="input__field">
                    <i class="fas fa-user"></i>
                    <input name="nombre" type="text" placeholder="Nombres" value="<?= $datos->nombre ?>">
                </div>                
                <div class="input__field">
                    <i class="fa-solid fa-signature"></i>
                    <input type="text" name="apellido" placeholder="Apellidos" value="<?= $datos->apellido ?>">
                </div>
                <div class="input__field">
                    <i class="fas fa-envelope"></i>
                    <input name="email" type="email" placeholder="Correo" value="<?= $datos->mail ?>">
                </div>
                <div class="input__field">
                    <i class="fas fa-user-tie"></i>
                    <input list="rol" type="text" name="rol" value="<?= $datos->rol?>">
                    <datalist id="rol">
                        <option value="profesor"></option>
                        <option value="estudiante"></option>
                    </datalist>
                </div>
                <div class="input__field">
                    <i class="fas fa-lock"></i>
                    <select name="estado">
                        <option value="" disabled selected>Estado de la cuenta</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
                <input name="actualizar" type="submit" value="Actualizar" class="btn solid">
            </form>
        </div>
    </div>
    <div class="panels__container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Editar usuario</h3>
                <p>Aqui podras editar la información del usuario que has seleccionado</p>
            </div>

            <img src="../assets/img/log.svg" class="image" alt="login">
        </div>
    </div>
</div>