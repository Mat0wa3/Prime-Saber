<?php
$conexion = Database::connect();
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["email"]) or empty($_POST["pass"])) {
        echo '<script>alert("Uno de los campos esta vacio")</script>';
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $mail = $_POST["email"];
        $rol = $_POST["rol"];
        $pass = $_POST["pass"];
        $sql = $conexion->query("INSERT INTO usuario VALUES(NULL, '$nombre', '$apellido','$mail', '$rol', '$pass', null, 'activo');");
        if ($sql == 1) {
            echo '<script>alert("Usuario registrado correctamente!")</script>';
        } else {
            echo '<script>alert("Error al registrar")</script>';
        }
    }
} else if (!empty($_POST["ingresar"])) {
    session_start();
    if (empty($_POST["usuario"]) and empty($_POST["pass"])) {
        echo '<script>alert("El usuario o contraseña ingresador no coinciden!")</script>';
    } else {
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
        $sql = $conexion->query("SELECT * FROM `usuario` WHERE (`nombre`='$usuario' OR `mail`='$usuario') AND `pass`='$pass' AND `estado`='activo'; ");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["apellidos"] = $datos->apellidos;
            $_SESSION["rol"] = $datos->rol;
            header("location: ../principal.php");
        } else {
            echo "<script>alert('Aceso denegado')</script>";
        }
    }
}