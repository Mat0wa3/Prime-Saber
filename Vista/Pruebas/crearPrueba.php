<?php
require_once '../../Modelo/db.php';
require_once '../../Controlador/pruebaControlador.php';
session_start();
if (empty($_SESSION["id"])) {
    header("location: ../usuario/SignUp.php");
}
$categoria = $_GET['categoria'];
$sql_materia = $conexion->query("SELECT * FROM materia");
$sql_examen = $conexion->query("SELECT * FROM examen");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['nombre'] ?></title>
</head>

<body>

    <header>

    </header>

    <main>
        <a href="../principal.php">Volver</a>
        <div class="container">
            <?php
            if ($categoria == 'limbo') {
                echo "<link rel='stylesheet' href='../../assets/css/card.css'>";
                while ($examenes = $sql_examen->fetch_object()) {
                ?>
                    <a class="card" href="./crearPrueba.php?categoria=agregar">
                        <div class="card__title">
                            <h1><?php echo $examenes->nombre_prueba ?></h1>
                        </div>
                        <div class="card__contenido">
                            <p>Agregar preguntas a la prueba</p>
                        </div>
                    </a>
                <?php
                }
                ?>
                <a class="card" href="./crearPrueba.php?categoria=CrearExamen">
                    <div class="card__title">
                        <h1>Crear examen</h1>
                    </div>
                    <div class="card__contenido">
                        <p>Presiona aquí para crear un nuevo examen</p>
                    </div>
                </a>
            <?php
            } else if ($categoria == 'CrearExamen') {
                echo "<link rel='stylesheet' href='../../assets/css/card.css'>";
            ?>
                <div class="card">
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
                        <select name="txtMateria">
                            <option value="" disabled selected>Materia</option>
                            <?php
                            while ($materia = $sql_materia->fetch_object()) {
                                ?>
                                <option value="<?php echo $materia->id ?>"><?php echo $materia->materia ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <input type="text" name="txtExamen" placeholder="Nombre del examen">
                        <input type="text" name="txtTiempo" placeholder="Duración (en minutos)">
                        <input type="submit" name="crear" value="Crear">
                    </form>
                </div>
            <?php
            } else if ($categoria == 'agregar') {
                echo "<link rel='stylesheet' href='../../assets/css/principal.css'>";
            ?>
                <div class="main__container">

                    <form method="post">
                        <fieldset>
                            <div class="prueba__examen">
                                <select class="controls" name="txtprueba">
                                    <?php
                                    while ($examen = $sql_examen->fetch_object()) {
                                        ?>
                                        <option value='<?php echo $examen->id ?>'><?php echo $examen->nombre_prueba ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="prueba__pregunta">
                                <input class="controls" type="text" name="pregunta" placeholder="Escribe tu pregunta">
                            </div>
                            <div class="prueba__respuesta_1">
                                <input class="controls" type="text" name="respuesta_1" placeholder="Respuesta (1)">
                                <label>
                                    <h3>Es correcta esta respuesta?</h3>
                                </label>
                                <div class="respuesta__estado">
                                    <label>
                                        <h3>Si</h3>
                                        <input type="radio" name="estado_1" value="1">
                                    </label>
                                    <label>
                                        <h3>No</h3>
                                        <input type="radio" name="estado_1" value="0">
                                    </label>
                                </div>
                            </div>
                            <div class="prueba__respuesta_2">
                                <input class="controls" type="text" name="respuesta_2" placeholder="Respuesta (2)">
                                <label>
                                    <h3>Es correcta esta respuesta?</h3>
                                </label>
                                <div class="respuesta__estado">
                                    <label>
                                        <h3>Si</h3>
                                        <input type="radio" name="estado_2" value="1">
                                    </label>
                                    <label>
                                        <h3>No</h3>
                                        <input type="radio" name="estado_2" value="0">
                                    </label>
                                </div>
                            </div>
                            <div class="prueba__respuesta_3">
                                <input class="controls" type="text" name="respuesta_3" placeholder="Respuesta (3)">
                                <label>
                                    <h3>Es correcta esta respuesta?</h3>
                                </label>
                                <div class="respuesta__estado">
                                    <label>
                                        <h3>Si</h3>
                                        <input type="radio" name="estado_3" value="1">
                                    </label>
                                    <label>
                                        <h3>No</h3>
                                        <input type="radio" name="estado_3" value="0">
                                    </label>
                                </div>
                            </div>
                            <div class="prueba__respuesta_4">
                                <input class="controls" type="text" name="respuesta_4" placeholder="Respuesta (4)">
                                <label>
                                    <h3>Es correcta esta respuesta?</h3>
                                </label>
                                <div class="respuesta__estado">
                                    <br>
                                    <label>
                                        <h3>Si</h3>
                                        <input type="radio" name="estado_4" value="1">
                                    </label>
                                    <label>
                                        <h3>No</h3>
                                        <input type="radio" name="estado_4" value="0">
                                    </label>
                                </div>
                            </div>
                            <input class="btn btn-enviar" type="submit" value="Agregar" name="txtagregar">
                        </fieldset>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>