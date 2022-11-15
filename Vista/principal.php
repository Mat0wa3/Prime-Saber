<?php
include("../Modelo/parameters.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="<?php echo url_base() ?>assets/css/principal.css">
    <link rel="stylesheet" href="<?php echo url_base() ?>assets/css/layout.css">
</head>

<body>
    <header>
        <?php require_once("./layout/header.php"); ?>
    </header>
    <?php
    session_start();
    if (empty($_SESSION["id"])) {
        header("location: ../Vista/usuario/SignUp.php");
    }
    if ($_SESSION["rol"] == "estudiante") {
        require_once('./principal/estudiante.php');
    } else if ($_SESSION["rol"] == "profesor") {
        require_once('./principal/profesor.php');
    } else if ($_SESSION["rol"] == "admin") {
        require('./principal/admin.php');
    }
    ?>
    <footer>
        <?php require_once('./layout/footer.php'); ?>
    </footer>
</body>

</html>