<?php

session_start();
require "../Modelo/parameters.php";
require("../Modelo/db.php");
require("../Controlador/pruebaControlador.php");
$conexion = Database::connect();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="shortcut icon" href="../assets/img/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/prueba.css">
</head>

<body>
    <header>
        <div class="header">
            <figure>
                <img src="../assets/img/escudo.png" alt="logo" height="120px">
            </figure>
            <h2>Prime Saber</h2>
            <div class="perfil">
                <a href="./principal.php">
                    <figure>
                        <img src="../assets/img/avatar.png" alt="perfil" height="70px">
                    </figure>
                    <h2>Volver</h2>
                </a>
            </div>
        </div>
    </header>
    <main class="main">
        <div id="clock"></div>
        <form method="post">
            <div class="container">
                <?php
                @$examen = $_GET['examen'];

                $n = 0;
                $i = 0;
                $pregunta_sel = $conexion->query("SELECT * FROM pregunta WHERE id_examen=$examen");

                while ($pregunta = $pregunta_sel->fetch_object()) {
                    $idp = $pregunta->id;
                    $i = $i + 1;
                ?>
                    <section id="p<?php echo $idp ?>">
                        <h3><?php echo $i ?>. <?php echo $pregunta->pregunta ?></h3>
                        <?php
                        $respuesta_sel = $conexion->query("SELECT * FROM tb_respuesta WHERE id_pregunta = $idp");
                        while ($respuesta = $respuesta_sel->fetch_array()) {
                        $idr = "p$idp";
                        ?>
                            <label>
                                <input type="radio" value="<?php echo $respuesta['estado'] ?>" name="<?php echo $idr ?>" onclick="respuesta($i,this)"> <?php echo $respuesta['respuesta'] ?>
                            </label>
                        <?php
                        }
                        ?>
                    </section>
                <?php
                } 
                 ?>

                <input name="enviar" type="submit" value="Enviar">
            </div>
        </form>
    </main>
    <script src="../assets/js/contador.js"></script>
</body>

</html>

