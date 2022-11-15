<?php
require("../../Modelo/db.php");
$sql = $conexion->query("SELECT preguntas.nombre FROM prueba join preguntas on prueba.id = preguntas.id; ");
echo $sql->fetch_assoc()['nombre']
?>