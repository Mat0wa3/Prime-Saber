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
    <link rel="stylesheet" href="../assets/css/principal.css">
    <title><?php echo $_SESSION['nombre']; ?></title>
</head>

<body>

    <main>
        <div class="container">
            <a href="./Pruebas.php" class="card">
                <figure>
                    <img src="../assets/img/escudo.png" alt="grupo1">
                </figure>
                <div class="contenido">
                    <h3>Realizar pruebas</h3>
                    <p>En esta sección podras ver todas las pruebas que debes realizar en tu curso</p>
                </div>
            </a>
            <a href="./resultado.php" class="card">
                <figure>
                    <img src="../assets/img/escudo.png" alt="grupo1">
                </figure>
                <div class="contenido">
                    <h3>Ver pruebas realizadas</h3>
                    <p>En estas sección podras ver todas las pruebas que has realizado</p>
                </div>
            </a>
        </div>
    </main>

</body>

</html>