<?php

require_once '../Modelo/db.php';
$conexion = Database::connect();
session_start();
if ($_SESSION['rol'] == "profesor") {
$sql = $conexion->query("SELECT * FROM tb_prueba");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="../assets/css/resultados.css">
</head>

<body>

    <main>
        <a href="./principal.php">Volver</a>

        <div class="main__container">
            <table>
                <thead>
                    <tr>
                        <th>Evaluaciones</th>
                        <th>Notas</th>
                        <th>Estudiante id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $j = 1;
                    $k = 1;
                    $l = 1;
                    while ($notas = $sql->fetch_object()) {
                        if ($notas->id_materia == 1) {
                            echo "<tr>
                                <td>Matematicas prueba($i)</td>
                                <td>$notas->nota</td>
                                <td>$notas->id_usuario</td>
                            </tr>";
                            $i += 1;
                        } else if ($notas->id_materia == 2) {
                            echo "<tr>
                                <td>Sociales prueba($j)</td>
                                <td>$notas->nota</td>
                                <td>$notas->id_usuario</td>
                            </tr>";
                            $j += 1;
                        } else if ($notas->id_materia == 3) {
                            echo "<tr>
                                <td>Ciencias prueba($k)</td>
                                <td>$notas->nota</td>
                                <td>$notas->id_usuario</td>
                            </tr>";
                            $k += 1;
                        } else if ($notas->id_materia == 4) {
                            echo "<tr>
                                <td>Lenguaje prueba($l)</td>
                                <td>$notas->nota</td>
                                <td>$notas->id_usuario</td>
                            </tr>";
                            $l += 1;
                        }
                    }
                    ?>
                </tbody>

            </table>

        </div>

    </main>

</body>

</html>
<?php
} else {
    $id = $_SESSION['id'];
    $sql = $conexion->query("SELECT * FROM tb_prueba WHERE id_usuario = '$id'");
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas</title>
        <link rel="stylesheet" href="../assets/css/resultados.css">
    </head>

    <body>

        <main>
            <a href="./principal.php">Volver</a>

            <div class="main__container">
                <table>
                    <thead>
                        <tr>
                            <th>Evaluaciones</th>
                            <th>Notas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $j = 1;
                        $k = 1;
                        $l = 1;
                        while ($notas = $sql->fetch_object()) {
                            if ($notas->id_materia == 1) {
                                echo "<tr>
                                <td>Matematicas prueba($i)</td>
                                <td>$notas->nota</td>
                            </tr>";
                                $i += 1;
                            } else if ($notas->id_materia == 2) {
                                echo "<tr>
                                <td>Sociales prueba($j)</td>
                                <td>$notas->nota</td>
                            </tr>";
                                $j += 1;
                            } else if ($notas->id_materia == 3) {
                                echo "<tr>
                                <td>Ciencias prueba($k)</td>
                                <td>$notas->nota</td>
                            </tr>";
                                $k += 1;
                            } else if ($notas->id_materia == 4) {
                                echo "<tr>
                                <td>Lenguaje prueba($l)</td>
                                <td>$notas->nota</td>
                            </tr>";
                                $l += 1;
                            }
                        }
                        ?>
                    </tbody>

                </table>

            </div>

        </main>

    </body>

    </html>
<?php
}
