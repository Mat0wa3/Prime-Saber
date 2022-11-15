<?php
require_once '../../Modelo/db.php';
require_once '../../Controlador/pruebaControlador.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/principal.css">
    <title></title>
</head>

<body>

    <header>

    </header>

    <main>
        <a href="../principal.php">Volver</a>
        <div class="main__container">
            <form method="post">
                <fieldset>
                    <div class="prueba_materia">
                        <select class="controls" name="materia">
                            <option value="" disabled selected>Selecciona la materia</option>
                            <option value="3">Matematicas</option>
                            <option value="4">Sociales</option>
                            <option value="6">Lengua castellana</option>
                            <option value="5">Ciencias</option>
                        </select>
                    </div>
                    <div class="prueba__pregunta">
                        <input class="controls" type="text" name="pregunta" placeholder="Escribe tu pregunta">
                    </div>
                    <div class="prueba__respuesta_1">
                        <input class="controls" type="text" name="respuesta_1" placeholder="Escribe la primera respuesta a tu pregunta">
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
                        <input class="controls" type="text" name="respuesta_2" placeholder="Escribe la segunda respuesta a tu pregunta">
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
                        <input class="controls" type="text" name="respuesta_3" placeholder="Escribe la tercera respuesta a tu pregunta">
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
                        <input class="controls" type="text" name="respuesta_4" placeholder="Escribe la cuarta respuesta a tu pregunta">
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
    </main>

    <footer>

    </footer>

</body>

</html>