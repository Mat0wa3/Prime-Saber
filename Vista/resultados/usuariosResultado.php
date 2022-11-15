<?php
if (empty($_SESSION["id"])) {
    header("location: ../usuario/SignUp.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/escudo.png" type="image/x-icon">
    <title><?php echo $_SESSION['nombre']; ?></title>
</head>
<body>

    <main>
        <div class="container">
            <a href="#1101" class="card">
                <figure>
                    <img src="../assets/img/escudo.png" alt="grupo1">
                </figure>
                <div class="contenido">
                    <h3>Datos de pruebas</h3>
                    <p>En este apartado podras ver los registros de las pruebas.</p>
                </div>
            </a>
            <a href="./Pruebas/crearPrueba.php" class="card">
                <figure>
                    <img src="../assets/img/escudo.png" alt="grupo1">
                </figure>
                <div class="contenido">
                    <h3>Crear una prueba</h3>
                    <p>En este apartado podras registrar una prueba.</p>
                </div>
            </a>
        </div>
    </main>

</body>
</html>