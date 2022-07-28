<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesion</title>
    <meta charset="utf-8">
    <link rel="icon" type="png" href="img/escudo.png">
    <link rel="stylesheet" type="text/css" href="css/iniciar sesion.css">
    <script type="text/javascript" src="js/iniciar sesion.js"></script>
    <link rel="stylesheet" href="css/icons.css">
</head>

<body>
    <header>
        <img src="img/escudo.png" alt="" class="escudo">
    </header>
    <br>
    <br>
    <form class="login" method="POST" action="login.php">
        <center><img class="avatar" src="img/avatar.png" alt=""></center>
        <h2>Iniciar Sesion</h2>
        <br>
        <div class="cosiampiro">
            <div>
                <label class="lbl-nom">
                    <span class="icon-user"></span>
                    <span class="text-nom">Usuario o Email</span>
                    <input type="text" autocomplete="off" name="correo">
                </label>
            </div>
            <div>
                <label class="lbl-nom">
                    <span class="icon-key"></span>
                    <span class="text-nom">Contraseña</span>
                    <input type="password" autocomplete="off" name="clave">
                </label>
            </div>
            <div>
                <label class="lbl-nom">
                    <span class="icon-users"></span>
                    <span class="text-nom">Tipo de Usuario</span>
                    <input type="text" name="IniciarS" list="TipoU">
                    <datalist id="TipoU" required>
                        <option class="listado" value="Estudiante">Estudiante</option>
                        <option class="listado" value="Profesor">Profesor</option>
                        <option class="listado" value="AdminAcademico">AdminAcademico</option>
                    </datalist>
            </div>
        </div>
        <input class="botons" type="submit" name="submit" value="Ingresar">
        <br>
        <br>
        <br>
    </form>
    <script type="text/javascript" src="js/placeh.js"></script>
</body>
<?php
if(isset($_POST['submit'])){
include('../Controlador/conexion.php');
session_start();

$TipoU = $_POST['IniciarS'];
$user = $_POST['correo'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM registro WHERE (Nombre='$user' OR Email='$user') AND Clave='$clave' AND Estado='Activo'";
$query = mysqli_query($conexion,$sql);
$rows = mysqli_num_rows($query);

if($rows > 0){
$data = mysqli_fetch_array($query);
    $_SESSION["id"] = $data["id"];
    $_SESSION["TipoU"] = $data["TipoU"];
    $_SESSION["Nombre"] = $data["Nombre"];
header("location: admin.php");
}
else {
echo "<script languaje='javascript'>alert('El correo o contraseña no coinciden');</script>";
}
mysqli_free_result($query);
mysqli_close($conexion);
}
?>
</html>