<?php
$conexion = Database::connect();
$sql = $conexion->query("SELECT id, nombre_prueba, id_materia FROM examen WHERE id NOT IN (SELECT id_examen FROM tb_prueba);");

echo "<a href='./principal.php?control=usuario'>Volver</a>";
echo "<div class='container'>";

while ($examen = $sql->fetch_object()) {
    ?>
    <a class="card" href="./Prueba.php?examen=<?php echo $examen->id ?>&materia=<?php echo $examen->id_materia ?>">
        <div class="card__title">
            <h1><?php echo $examen->nombre_prueba ?></h1>
        </div>
        <div class="card__contenido">
            <p>Presiona aquí para iniciar tu examen <?php echo $examen->nombre_prueba ?></p>
        </div>
    </a>
    <?php
}
?>
</div>