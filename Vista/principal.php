<?php
@$control = $_GET['control'];
require("../Modelo/parameters.php");
require("../Modelo/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <script src="https://kit.fontawesome.com/a22bc65f86.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/escudo.png" type="image/x-icon">
</head>
<body>
    <?php
    if ($control == "ingresar") {
        require("./usuario/ingresar.php");
    } else if ($control == "usuario") {
        session_start();
        if (empty($_SESSION["id"])) {
            header("location: ./principal.php?control=ingresar");
        }
        ?>
        <link rel="stylesheet" href="../assets/css/principal.css">
        <link rel="stylesheet" href="../assets/css/layout.css">
        <header><?php require("./layout/header.php") ?></header>
        <?php
        if (strtolower($_SESSION['rol']) == "admin") {
            require_once("./principal/admin.php");
        } else if (strtolower($_SESSION['rol']) == "profesor") {
            require_once("./principal/profesor.php");
        } else if (strtolower($_SESSION['rol']) == "estudiante") {
            require_once("./principal/estudiante.php");
        }
        ?>
        <footer><?php require_once("./layout/footer.php") ?></footer>
        <?php
    } else if ($control == "pruebas") {
        ?>
        <link rel='stylesheet' href='../assets/css/card.css'>
        <link rel="stylesheet" href="../assets/css/layout.css">
        <header><?php require_once("./layout/header.php") ?></header>
        <?php
        require_once("./Pruebas/vistaPruebas.php");
        ?>
        <footer><?php require_once("./layout/footer.php") ?></footer>
        <?php
    } else if ($control == "editarU") {
        echo "<link rel='stylesheet' href='../assets/css/ingresar.css'>";
        require_once("./usuario/editarUsuario.php");
    }
    ?>
</body>
</html>