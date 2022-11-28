<?php

$conexion = Database::connect();
if (!empty($_POST['crear'])) {
    if (empty($_POST['txtTiempo']) or empty($_POST['txtExamen'])) {
        echo "<script>alert('Alguno de los campos esta vacio!')</script>";
    } else {
        $tiempo = $_POST['txtTiempo'];
        $materia = $_POST['txtMateria'];
        $nombre_prueba = $_POST['txtExamen'];
        $id_encargado = $_POST['id'];
        $sql_examen = $conexion->query("INSERT INTO examen VALUES (NULL, '$id_encargado', '$materia', '$nombre_prueba', '$tiempo')");
        if ($sql_examen == 1) {
            echo "<script>
            alert('El examen se creo!');
            window.location = './crearPrueba.php?categoria=agregar';
            </script>";
        }
    }
} else if (!empty($_POST['txtagregar'])) {
    if (empty($_POST['pregunta']) or empty($_POST['respuesta_1']) or empty($_POST['respuesta_2']) or empty($_POST['respuesta_3']) or empty($_POST['respuesta_4'])) {
        echo '<script>alert("Alguno de los campos esta vacio!")</script>';
    } else {
        $pregunta = $_POST['pregunta'];
        $examen = $_POST['txtprueba'];
        $sql_pregunta = $conexion->query("INSERT INTO pregunta (`pregunta`, `id_examen`) VALUES ('$pregunta', '$examen')");
        if ($sql_pregunta == 1) {
            $sql_preg = $conexion->query("SELECT MAX(id) as id FROM pregunta");
            $ultima_preg = $sql_preg->fetch_array()['id'];
            if ($ultima_preg) {
                $respuesta_1 = $_POST['respuesta_1'];
                $respuesta_2 = $_POST['respuesta_2'];
                $respuesta_3 = $_POST['respuesta_3'];
                $respuesta_4 = $_POST['respuesta_4'];
                $estado_1 = $_POST['estado_1'];
                $estado_2 = $_POST['estado_2'];
                $estado_3 = $_POST['estado_3'];
                $estado_4 = $_POST['estado_4'];
                $sql_respuesta = $conexion->multi_query("INSERT INTO tb_respuesta VALUES (NULL, '$respuesta_1', $ultima_preg, $estado_1); INSERT INTO tb_respuesta VALUES (NULL, '$respuesta_2', $ultima_preg, $estado_2); INSERT INTO tb_respuesta VALUES (NULL, '$respuesta_3', $ultima_preg, $estado_3); INSERT INTO tb_respuesta VALUES (NULL, '$respuesta_4', $ultima_preg, $estado_4)");
                if ($sql_respuesta == 1) {
                    echo '<script>
                    alert("SE HAN REGISTRADO LOS DATOS CORRECTAMENTE!");
                    window.location = "../principal.php";
                    </script>';
                } else {
                    echo '<script>alert("ERROR AL INSERTAR LAS RESPUESTAS")</script>';
                }
            } else {
                echo '<script>alert("ERROR AL INSERTAR LAS PREGUNTAS")</script>';
            }
        }
    }
} else if (!empty($_POST['enviar'])) {
    $resultado = 0;
    $l = 0;
    foreach ($_POST as $quiz => $n) {
        if ($n == 1) {
            $resultado += $n;
        }
        $l += 1;
    }
    $l -= 1;
    if ($l < 1) {
        echo "<script>alert('No has seleccionado ninguna respuesta!')</script>";
    } else {
        $f = ($resultado / $l) * 5;
        $nota = number_format($f, 1);
        @$id_examen = $_GET['examen'];
        @$id_materia = $_GET['materia'];

        $id_u = $_SESSION['id'];

        $sql = $conexion->query("INSERT INTO tb_prueba VALUES (NULL, $id_u, $id_examen, $id_materia, $nota, NOW())");
        if ($sql == 1) {
            echo "
        <script>alert('Haz acertado $resultado de $l y tu nota final es: $nota');
        window.location = './principal.php';
        </script>";
        } else {
            echo "<script>alert('ERROR AL REGISTRAR LA PRUEBA!')</script>";
        }
    }
}
?>