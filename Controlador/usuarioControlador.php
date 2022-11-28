<?php
$conexion = Database::connect();
if (!empty($_POST["registrarse"])) {
    if (empty($_POST["txtnombre"]) or empty($_POST["txtmail"]) or empty($_POST["txtclave"])) {
        echo '<script>alert("Uno de los campos esta vacio")</script>';
    } else if ($_POST["txtclave"] != $_POST['txtclave2']) {
        echo "<script>alert('LAS CONTRASEÑAS NO COINCIDEN!')</script>";
    } else {
        $nombre = $_POST["txtnombre"];
        $apellido = $_POST["txtapellido"];
        $mail = $_POST["txtmail"];
        $rol = $_POST["txtrol"];
        #$pass = password_hash($_POST["pass"], PASSWORD_BCRYPT, ['COST'=>4]);
        $pass = $_POST['txtclave'];
        $sql = $conexion->query("INSERT INTO usuario VALUES(NULL, '$nombre', '$apellido','$mail', '$rol', '$pass', null, 'activo');");
        if ($sql == 1) {
            echo '<script>alert("Usuario registrado correctamente!")</script>';
        } else {
            echo '<script>alert("Error al registrar")</script>';
        }
    }
} else if (!empty($_POST["ingresar"])) {
    session_start();
    if (empty($_POST["txtusuario"]) and empty($_POST["txtclave"])) {
        echo '<script>alert("El usuario o contraseña ingresados no coinciden!")</script>';
    } else {
        $usuario = $_POST["txtusuario"];
        $pass = $_POST["txtclave"];
        $sql = $conexion->query("SELECT * FROM `usuario` WHERE (`nombre`='$usuario' OR `mail`='$usuario') AND `pass`='$pass' AND `estado`='activo'; ");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["apellidos"] = $datos->apellidos;
            $_SESSION["rol"] = $datos->rol;
            header("location: ./principal.php?control=usuario");
        } else {
            echo "<script>alert('Acceso denegado')</script>";
        }
    }
}